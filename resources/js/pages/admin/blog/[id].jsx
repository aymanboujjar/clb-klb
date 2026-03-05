import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import PostForm from './Partials/PostForm';

export default function AdminBlogEdit({ post, categories = [] }) {
    if (!post) return null;

    return (
        <>
            <AppLayout>
                <Head title="Modifier l'article" />
                <div className="mx-auto max-w-4xl space-y-6 p-4">
                    <h1 className="text-2xl font-semibold">Modifier l'article</h1>
                    <PostForm
                        post={post}
                        categories={categories}
                        submitRoute={`/admin/blogs/${post.id}`}
                        submitMethod="put"
                        submitLabel="Enregistrer"
                    />
                </div>
            </AppLayout>
        </>
    );
}
