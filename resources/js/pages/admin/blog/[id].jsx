import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import BlogForm from './Partials/BlogForm';

export default function AdminBlogEdit({ blog, categories = [] }) {
    if (!blog) return null;

    return (
        <>
            <AppLayout>
                <Head title="Modifier l'article" />
                <div className="mx-auto max-w-4xl space-y-6 p-4">
                    <h1 className="text-2xl font-semibold">Modifier l'article</h1>
                    <BlogForm
                        blog={blog}
                        categories={categories}
                        submitRoute={`/admin/blogs/${blog.id}`}
                        submitMethod="put"
                        submitLabel="Enregistrer"
                    />
                </div>
            </AppLayout>
        </>
    );
}
