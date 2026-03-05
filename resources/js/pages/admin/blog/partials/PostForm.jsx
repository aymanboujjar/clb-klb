import React, { useState } from 'react';
import { useForm } from '@inertiajs/react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import QuillEditor from '@/components/QuillEditor';

const LANGS = [
    { key: 'fr', label: 'Français' },
    { key: 'ar', label: 'العربية' },
    { key: 'nl', label: 'Nederlands' },
];

/**
 * Shared form for create/edit post. Uses Inertia useForm.
 * formData: { category_slug, image?, title: { fr, ar, nl }, description: { fr, ar, nl }, body: { fr, ar, nl }, published_at }
 */
export default function PostForm({
    post = null,
    categories = [],
    submitRoute,
    submitMethod = 'post',
    submitLabel = 'Enregistrer',
}) {
    const [activeTab, setActiveTab] = useState('fr');

    const initialTitle = post?.title ?? { fr: '', ar: '', nl: '' };
    const initialDescription = post?.description ?? { fr: '', ar: '', nl: '' };
    const initialBody = post?.body ?? { fr: '', ar: '', nl: '' };

    const { data, setData, post: postMethod, put, processing, errors } = useForm({
        category_slug: post?.category_slug ?? 'evenements',
        image: null,
        title: { ...initialTitle },
        description: { ...initialDescription },
        body: { ...initialBody },
        published_at: post?.published_at ?? '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        const options = { forceFormData: true };
        if (submitMethod === 'put') {
            put(submitRoute, options);
        } else {
            postMethod(submitRoute, options);
        }
    };

    return (
        <form onSubmit={handleSubmit} className="space-y-6">
            <div>
                <Label htmlFor="category_slug">Catégorie</Label>
                <select
                    id="category_slug"
                    value={data.category_slug}
                    onChange={(e) => setData('category_slug', e.target.value)}
                    className="mt-1 block w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                >
                    {categories.map((c) => (
                        <option key={c.slug} value={c.slug}>
                            {c.label_fr}
                        </option>
                    ))}
                </select>
            </div>

            <div>
                <Label>Image</Label>
                {post?.image && (
                    <img
                        src={post.image}
                        alt=""
                        className="mt-1 h-24 rounded border object-cover"
                    />
                )}
                <Input
                    type="file"
                    accept="image/*"
                    className="mt-1"
                    onChange={(e) => setData('image', e.target.files[0] || null)}
                />
            </div>

            <div>
                <Label>Contenu par langue</Label>
                <div className="mt-2 flex gap-2 border-b border-border">
                    {LANGS.map(({ key, label }) => (
                        <button
                            key={key}
                            type="button"
                            onClick={() => setActiveTab(key)}
                            className={`px-4 py-2 text-sm font-medium ${
                                activeTab === key
                                    ? 'border-b-2 border-primary text-primary'
                                    : 'text-muted-foreground hover:text-foreground'
                            }`}
                        >
                            {label}
                        </button>
                    ))}
                </div>

                {LANGS.map(({ key }) => (
                    <div
                        key={key}
                        className={activeTab === key ? 'mt-4 space-y-4' : 'hidden'}
                    >
                        <div>
                            <Label>Titre ({key})</Label>
                            <Input
                                value={data.title[key]}
                                onChange={(e) =>
                                    setData('title', { ...data.title, [key]: e.target.value })
                                }
                                className="mt-1"
                                placeholder={`Titre en ${key}`}
                            />
                            {errors?.[`title.${key}`] && (
                                <p className="mt-1 text-sm text-destructive">{errors[`title.${key}`]}</p>
                            )}
                        </div>
                        <div>
                            <Label>Description ({key})</Label>
                            <textarea
                                value={data.description[key]}
                                onChange={(e) =>
                                    setData('description', {
                                        ...data.description,
                                        [key]: e.target.value,
                                    })
                                }
                                rows={3}
                                className="mt-1 w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                                placeholder={`Description en ${key}`}
                            />
                        </div>
                        <div>
                            <Label>Contenu / Corps ({key})</Label>
                            <div className="mt-1">
                                <QuillEditor
                                    value={data.body[key]}
                                    onChange={(value) =>
                                        setData('body', { ...data.body, [key]: value })
                                    }
                                    placeholder={`Contenu en ${key}`}
                                />
                            </div>
                        </div>
                    </div>
                ))}
            </div>

            <div>
                <Label htmlFor="published_at">Date de publication (optionnel)</Label>
                <Input
                    id="published_at"
                    type="date"
                    value={data.published_at}
                    onChange={(e) => setData('published_at', e.target.value)}
                    className="mt-1 w-48"
                />
            </div>

            <div className="flex gap-2">
                <Button type="submit" disabled={processing}>
                    {submitLabel}
                </Button>
                <Button type="button" variant="outline" asChild>
                    <a href="/admin/blogs">Annuler</a>
                </Button>
            </div>
        </form>
    );
}
