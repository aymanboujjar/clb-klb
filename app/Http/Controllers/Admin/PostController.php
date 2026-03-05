<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    private const CATEGORIES = [
        ['slug' => 'evenements', 'label_fr' => 'Événements', 'label_ar' => 'فعاليات', 'label_nl' => 'Evenementen'],
        ['slug' => 'cooperation', 'label_fr' => 'Coopération', 'label_ar' => 'تعاون', 'label_nl' => 'Samenwerking'],
        ['slug' => 'portraits', 'label_fr' => 'Portraits', 'label_ar' => 'صور', 'label_nl' => 'Portretten'],
        ['slug' => 'culture', 'label_fr' => 'Culture', 'label_ar' => 'ثقافة', 'label_nl' => 'Cultuur'],
    ];

    public function index(): Response
    {
        $posts = Post::query()
            ->orderByDesc('created_at')
            ->get()
            ->map(fn (Post $post) => [
                'id' => $post->id,
                'category_slug' => $post->category_slug,
                'image' => $post->image ? asset('storage/' . $post->image) : null,
                'title_fr' => $post->getTranslation('title', 'fr'),
                'published_at' => $post->published_at?->toIso8601String(),
                'created_at' => $post->created_at->toIso8601String(),
            ]);

        return Inertia::render('admin/blog/index', [
            'posts' => $posts,
            'categories' => self::CATEGORIES,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/blog/create', [
            'categories' => self::CATEGORIES,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category_slug' => ['required', 'string', 'in:evenements,cooperation,portraits,culture'],
            'image' => ['nullable', 'image', 'max:2048'],
            'title.fr' => ['required', 'string', 'max:255'],
            'title.ar' => ['nullable', 'string', 'max:255'],
            'title.nl' => ['nullable', 'string', 'max:255'],
            'description.fr' => ['nullable', 'string', 'max:2000'],
            'description.ar' => ['nullable', 'string', 'max:2000'],
            'description.nl' => ['nullable', 'string', 'max:2000'],
            'body.fr' => ['nullable', 'string'],
            'body.ar' => ['nullable', 'string'],
            'body.nl' => ['nullable', 'string'],
            'published_at' => ['nullable', 'string', 'date'],
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        $post = new Post;
        $post->category_slug = $validated['category_slug'];
        $post->image = $imagePath;
        $post->title = [
            'fr' => $validated['title']['fr'] ?? '',
            'ar' => $validated['title']['ar'] ?? '',
            'nl' => $validated['title']['nl'] ?? '',
        ];
        $post->description = [
            'fr' => $validated['description']['fr'] ?? '',
            'ar' => $validated['description']['ar'] ?? '',
            'nl' => $validated['description']['nl'] ?? '',
        ];
        $post->body = [
            'fr' => $validated['body']['fr'] ?? '',
            'ar' => $validated['body']['ar'] ?? '',
            'nl' => $validated['body']['nl'] ?? '',
        ];
        $post->published_at = ! empty($validated['published_at']) ? $validated['published_at'] : null;
        $post->save();

        return redirect()->route('admin.blog.index')->with('success', 'Article créé.');
    }

    public function edit(Post $post): Response
    {
        $post->load([]);
        return Inertia::render('admin/blog/[id]', [
            'post' => [
                'id' => $post->id,
                'category_slug' => $post->category_slug,
                'image' => $post->image ? asset('storage/' . $post->image) : null,
                'image_path' => $post->image,
                'title' => $post->title,
                'description' => $post->description,
                'body' => $post->body,
                'published_at' => $post->published_at?->format('Y-m-d'),
            ],
            'categories' => self::CATEGORIES,
        ]);
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated = $request->validate([
            'category_slug' => ['required', 'string', 'in:evenements,cooperation,portraits,culture'],
            'image' => ['nullable', 'image', 'max:2048'],
            'title.fr' => ['required', 'string', 'max:255'],
            'title.ar' => ['nullable', 'string', 'max:255'],
            'title.nl' => ['nullable', 'string', 'max:255'],
            'description.fr' => ['nullable', 'string', 'max:2000'],
            'description.ar' => ['nullable', 'string', 'max:2000'],
            'description.nl' => ['nullable', 'string', 'max:2000'],
            'body.fr' => ['nullable', 'string'],
            'body.ar' => ['nullable', 'string'],
            'body.nl' => ['nullable', 'string'],
            'published_at' => ['nullable', 'string', 'date'],
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->image = $request->file('image')->store('posts', 'public');
        }

        $post->category_slug = $validated['category_slug'];
        $post->title = [
            'fr' => $validated['title']['fr'] ?? '',
            'ar' => $validated['title']['ar'] ?? '',
            'nl' => $validated['title']['nl'] ?? '',
        ];
        $post->description = [
            'fr' => $validated['description']['fr'] ?? '',
            'ar' => $validated['description']['ar'] ?? '',
            'nl' => $validated['description']['nl'] ?? '',
        ];
        $post->body = [
            'fr' => $validated['body']['fr'] ?? '',
            'ar' => $validated['body']['ar'] ?? '',
            'nl' => $validated['body']['nl'] ?? '',
        ];
        $post->published_at = ! empty($validated['published_at']) ? $validated['published_at'] : null;
        $post->save();

        return redirect()->route('admin.blog.index')->with('success', 'Article mis à jour.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Article supprimé.');
    }
}
