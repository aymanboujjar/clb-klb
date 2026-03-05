import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import { Button } from '@/components/ui/button';

export default function AdminBlogIndex({ posts = [], categories = [] }) {
    return (
        <>
            <AppLayout>
                <Head title="Articles du blog" />
                <div className="mx-auto max-w-4xl space-y-6 p-4">
                    <div className="flex items-center justify-between">
                        <h1 className="text-2xl font-semibold">Articles du blog</h1>
                        <Button asChild>
                            <Link href="/admin/blogs/create">Nouvel article</Link>
                        </Button>
                    </div>

                    {posts.length === 0 ? (
                        <p className="text-muted-foreground">Aucun article. Créez-en un.</p>
                    ) : (
                        <ul className="space-y-3">
                            {posts.map((post) => (
                                <li
                                    key={post.id}
                                    className="flex items-center gap-4 rounded-lg border border-border bg-card p-4"
                                >
                                    {post.image && (
                                        <img
                                            src={post.image}
                                            alt=""
                                            className="h-14 w-20 rounded object-cover"
                                        />
                                    )}
                                    <div className="min-w-0 flex-1">
                                        <p className="font-medium truncate">{post.title_fr || 'Sans titre'}</p>
                                        <p className="text-muted-foreground text-sm">
                                            {categories.find((c) => c.slug === post.category_slug)?.label_fr ?? post.category_slug}
                                        </p>
                                    </div>
                                    <div className="flex gap-2">
                                        <Button variant="outline" size="sm" asChild>
                                            <Link href={`/admin/blogs/${post.id}/edit`}>Modifier</Link>
                                        </Button>
                                    </div>
                                </li>
                            ))}
                        </ul>
                    )}
                </div>
            </AppLayout>
        </>
    );
}
