<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BlogController extends Controller
{
    private const CATEGORIES = [
        ['slug' => 'tout', 'label' => 'Tout'],
        ['slug' => 'evenements', 'label' => 'Événements'],
        ['slug' => 'cooperation', 'label' => 'Coopération'],
        ['slug' => 'portraits', 'label' => 'Portraits'],
        ['slug' => 'culture', 'label' => 'Culture'],
    ];

    private function locale(): string
    {
        $locale = app()->getLocale();
        return in_array($locale, ['fr', 'ar', 'nl'], true) ? $locale : 'fr';
    }

    private function blogToArray(Blog $blog): array
    {
        $locale = $this->locale();
        $imageUrl = $blog->image ? asset('storage/' . $blog->image) : null;

        return [
            'id' => $blog->id,
            'title' => $blog->getTranslation('title', $locale),
            'excerpt' => $blog->getTranslation('description', $locale),
            'body' => $blog->getTranslation('body', $locale),
            'category' => $this->categoryLabel($blog->category_slug),
            'category_slug' => $blog->category_slug,
            'image_url' => $imageUrl,
            'published_at' => $blog->published_at?->translatedFormat('j F Y'),
            'url' => '/blogs/' . $blog->id,
        ];
    }

    private function categoryLabel(string $slug): string
    {
        foreach (self::CATEGORIES as $c) {
            if ($c['slug'] === $slug) {
                return $c['label'];
            }
        }
        return $slug;
    }

    /**
     * Public: published blogs listing with current locale translation (fallback fr).
     */
    public function index(Request $request): Response
    {
        $categorySlug = $request->query('category', 'tout');
        $perPage = 6;

        $query = Blog::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());

        if ($categorySlug !== 'tout') {
            $query->where('category_slug', $categorySlug);
        }

        $paginated = $query->orderByDesc('published_at')->paginate($perPage);

        $blogs = $paginated->getCollection()->map(fn (Blog $blog) => $this->blogToArray($blog))->values()->all();

        $lastPage = $paginated->lastPage();
        $currentPage = $paginated->currentPage();
        $basePath = $request->url();
        $queryParams = $request->query();
        $links = [];
        for ($i = 1; $i <= $lastPage; $i++) {
            $queryParams['page'] = $i;
            $links[] = [
                'url' => $basePath . '?' . http_build_query($queryParams),
                'label' => (string) $i,
                'active' => $i === $currentPage,
            ];
        }

        $nextUrl = $currentPage < $lastPage
            ? $basePath . '?' . http_build_query(array_merge($request->query(), ['page' => $currentPage + 1]))
            : null;

        return Inertia::render('user/blog/index', [
            'blogs' => $blogs,
            'categories' => self::CATEGORIES,
            'currentCategory' => $categorySlug,
            'pagination' => [
                'current_page' => $currentPage,
                'last_page' => $lastPage,
                'per_page' => $paginated->perPage(),
                'total' => $paginated->total(),
                'links' => $links,
                'next_url' => $nextUrl,
            ],
        ]);
    }

    /**
     * Public: single published blog with current locale translation (fallback fr).
     */
    public function show(int $id): Response
    {
        $blog = Blog::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->find($id);

        if (! $blog) {
            abort(404);
        }

        return Inertia::render('user/blog/[id]', [
            'blog' => $this->blogToArray($blog),
        ]);
    }
}
