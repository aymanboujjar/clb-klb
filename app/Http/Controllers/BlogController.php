<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    /**
     * Build a single post payload for the frontend (listing or show) with translated fields.
     */
    private function postToArray(Post $post): array
    {
        $locale = $this->locale();
        $imageUrl = $post->image ? asset('storage/' . $post->image) : null;

        return [
            'id' => $post->id,
            'title' => $post->getTranslation('title', $locale),
            'excerpt' => $post->getTranslation('description', $locale),
            'body' => $post->getTranslation('body', $locale),
            'category' => $this->categoryLabel($post->category_slug),
            'category_slug' => $post->category_slug,
            'image_url' => $imageUrl,
            'published_at' => $post->published_at?->translatedFormat('j F Y'),
            'url' => '/blogs/' . $post->id,
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
     * Display the blog listing with optional category filter and pagination.
     */
    public function index(Request $request): Response
    {
        $categorySlug = $request->query('category', 'tout');
        $perPage = 6;
        $locale = $this->locale();

        $query = Post::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());

        if ($categorySlug !== 'tout') {
            $query->where('category_slug', $categorySlug);
        }

        $paginated = $query->orderByDesc('published_at')->paginate($perPage);

        $posts = $paginated->getCollection()->map(fn (Post $post) => $this->postToArray($post))->values()->all();

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
            'posts' => $posts,
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
     * Display a single blog post.
     */
    public function show(int $id): Response
    {
        $post = Post::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->find($id);

        if (!$post) {
            abort(404);
        }

        return Inertia::render('user/blog/[id]', [
            'post' => $this->postToArray($post),
        ]);
    }
}
