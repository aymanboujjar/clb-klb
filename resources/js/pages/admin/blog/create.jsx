import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import BlogForm from './Partials/BlogForm';

export default function AdminBlogCreate({ categories = [] }) {
    return (
        <>
            <AppLayout>
                <Head title="Nouvel article" />
                <div className="mx-auto max-w-4xl space-y-6 p-4">
                    <h1 className="text-2xl font-semibold">Nouvel article</h1>
                    <BlogForm
                        categories={categories}
                        submitRoute="/admin/blogs"
                        submitMethod="post"
                        submitLabel="Créer l'article"
                    />
                </div>
            </AppLayout>
        </>
    );
}
