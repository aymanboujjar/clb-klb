import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import { Button } from '@/components/ui/button';

export default function AdminBlogIndex({ blogs = [], categories = [] }) {
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

                    {blogs.length === 0 ? (
                        <p className="text-muted-foreground">Aucun article. Créez-en un.</p>
                    ) : (
                        <ul className="space-y-3">
                            {blogs.map((blog) => (
                                <li
                                    key={blog.id}
                                    className="flex items-center gap-4 rounded-lg border border-border bg-card p-4"
                                >
                                    {blog.image && (
                                        <img
                                            src={blog.image}
                                            alt=""
                                            className="h-14 w-20 rounded object-cover"
                                        />
                                    )}
                                    <div className="min-w-0 flex-1">
                                        <p className="font-medium truncate">{blog.title_fr || 'Sans titre'}</p>
                                        <p className="text-muted-foreground text-sm">
                                            {categories.find((c) => c.slug === blog.category_slug)?.label_fr ?? blog.category_slug}
                                        </p>
                                    </div>
                                    <div className="flex gap-2">
                                        <Button variant="outline" size="sm" asChild>
                                            <Link href={`/admin/blogs/${blog.id}/edit`}>Modifier</Link>
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
