import { Link } from '@inertiajs/react';
import TransText from '@/components/TransText';

const socialLinks = [
    { name: 'Facebook', href: '#', icon: 'facebook' },
    { name: 'Instagram', href: '#', icon: 'instagram' },
    { name: 'LinkedIn', href: '#', icon: 'linkedin' },
];

function SocialIcon({ name }) {
    const paths = {
        facebook: 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z',
        instagram: 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z',
        linkedin: 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z',
    };
    return (
        <svg className="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden>
            <path d={paths[name] || ''} />
        </svg>
    );
}

function MemberCard({ member, showSocial }) {
    const imageUrl = member.imageUrl || member.image_path;
    return (
        <div className="group flex flex-col rounded-2xl border border-border bg-card p-6 text-center shadow-sm transition-all hover:border-border hover:shadow-md sm:p-8">
            <div className="relative mx-auto h-36 w-36 shrink-0 overflow-hidden rounded-2xl border border-border bg-muted shadow-inner ring-2 ring-white sm:h-40 sm:w-40">
                {imageUrl ? (
                    <img
                        src={imageUrl}
                        alt={member.name}
                        className="h-full w-full object-cover object-center transition duration-300 group-hover:scale-105"
                    />
                ) : (
                    <div className="flex h-full w-full items-center justify-center bg-muted text-5xl font-semibold text-muted-foreground sm:text-6xl">
                        {(member.name || ' ').charAt(0).toUpperCase()}
                    </div>
                )}
                {showSocial && (
                    <div className="absolute inset-x-0 bottom-0 flex justify-center gap-1.5 bg-foreground/80 py-2 backdrop-blur-sm">
                        {socialLinks.map(({ name, href }) => (
                            <Link
                                key={name}
                                href={href}
                                className="rounded-full p-1.5 text-white transition-colors hover:bg-white/20"
                                aria-label={name}
                            >
                                <SocialIcon name={name} />
                            </Link>
                        ))}
                    </div>
                )}
            </div>
            <h4 className="mt-5 font-heading text-lg font-semibold tracking-tight text-foreground">
                {member.name}
            </h4>
            {member.position && (
                <p className="mt-1.5 text-sm font-medium text-foreground/80">
                    {member.position}
                </p>
            )}
            {member.description && (
                <p className="mt-3 max-w-[300px] mx-auto text-sm leading-relaxed text-muted-foreground">
                    {member.description}
                </p>
            )}
        </div>
    );
}

export default function TeamSection({ teamMembers = [] }) {
    const bureau = teamMembers.filter((m) => (m.category || 'bureau') === 'bureau');
    const honorary = teamMembers.filter((m) => m.category === 'honorary');
    if (bureau.length === 0 && honorary.length === 0) return null;

    return (
        <section className="border-b border-border bg-muted/40 py-20 lg:py-28">
            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div className="flex flex-col items-center">
                    <span className="inline-block rounded-full border border-cl-beta/40 bg-cl-beta/10 px-4 py-1.5 text-center text-xs font-semibold uppercase tracking-[0.25em] text-cl-beta">
                        <TransText fr="Gouvernance" ar="الحوكمة" nl="Bestuur" as="span" />
                    </span>
                    <h2 className="mt-5 text-center font-heading text-3xl font-bold tracking-tight text-foreground sm:text-4xl lg:text-5xl">
                        <TransText fr="Notre Équipe" ar="فريقنا" nl="Ons team" as="span" />
                    </h2>
                    <div className="mt-4 h-1 w-16 rounded-full bg-cl-beta/60" aria-hidden />
                </div>

                {bureau.length > 0 && (
                    <div className="mt-14">
                        <div className="flex flex-col items-center gap-2">
                            <span className="text-xs font-semibold uppercase tracking-widest text-muted-foreground">
                                <TransText fr="Membres du bureau" ar="أعضاء المكتب" nl="Bureau-leden" as="span" />
                            </span>
                            <div className="h-px w-12 bg-border" aria-hidden />
                        </div>
                        <div className="mt-10 grid gap-6 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                            {bureau.map((member) => (
                                <MemberCard key={member.id || member.name} member={member} showSocial={member.show_social} />
                            ))}
                        </div>
                    </div>
                )}

                {honorary.length > 0 && (
                    <div className="mt-16 pt-14 border-t border-border">
                        <div className="flex flex-col items-center gap-2">
                            <span className="text-xs font-semibold uppercase tracking-widest text-muted-foreground">
                                <TransText fr="Membres d'honneur" ar="أعضاء الشرف" nl="Ereleden" as="span" />
                            </span>
                            <div className="h-px w-12 bg-border" aria-hidden />
                        </div>
                        <div className="mt-10 grid gap-6 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                            {honorary.map((member) => (
                                <MemberCard key={member.id || member.name} member={member} showSocial={false} />
                            ))}
                        </div>
                    </div>
                )}
            </div>
        </section>
    );
}
