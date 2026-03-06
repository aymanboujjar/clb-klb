import TransText from '@/components/TransText';

export default function TeamSection({ teamMembers = [] }) {
    const bureau = teamMembers.filter((m) => (m.category || 'bureau') === 'bureau');
    const honorary = teamMembers.filter((m) => m.category === 'honorary');
    if (bureau.length === 0 && honorary.length === 0) return null;

    const MemberCard = ({ member }) => {
        const imageUrl = member.imageUrl || member.image_path;
        return (
            <div className="group flex flex-col rounded-2xl border border-border bg-card p-6 text-center shadow-sm transition-all hover:border-border hover:shadow-md sm:p-8">
                <div className="mx-auto h-32 w-32 shrink-0 overflow-hidden rounded-2xl border border-border bg-muted shadow-inner ring-2 ring-white sm:h-36 sm:w-36">
                    {imageUrl ? (
                        <img
                            src={imageUrl}
                            alt={member.name}
                            className="h-full w-full object-cover object-center transition duration-300 group-hover:scale-105"
                        />
                    ) : (
                        <div className="flex h-full w-full items-center justify-center bg-muted text-4xl font-semibold text-muted-foreground sm:text-5xl">
                            {(member.name || ' ').charAt(0).toUpperCase()}
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
                    <p className="mt-3 max-w-[280px] mx-auto text-sm leading-relaxed text-muted-foreground">
                        {member.description}
                    </p>
                )}
            </div>
        );
    };

    return (
        <section className="border-b border-border bg-muted/40 py-20 lg:py-28">
            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div className="flex flex-col items-center">
                    <span className="inline-block rounded-full border border-cl-beta/40 bg-cl-beta/10 px-4 py-1.5 text-center text-xs font-semibold uppercase tracking-[0.25em] text-cl-beta">
                        <TransText fr="La gouvernance du CLB" ar="حوكمة CLB" nl="Het bestuur van CLB" as="span" />
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
                                <MemberCard key={member.id || member.name} member={member} />
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
                                <MemberCard key={member.id || member.name} member={member} />
                            ))}
                        </div>
                    </div>
                )}
            </div>
        </section>
    );
}
