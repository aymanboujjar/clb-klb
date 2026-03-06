import TransText from '@/components/TransText';

function MemberCard({ member }) {
    const imageUrl = member.imageUrl || member.image_path;
    return (
        <div className="flex flex-col rounded-2xl border border-border bg-card p-6 text-center shadow-md transition hover:border-alpha/20 hover:shadow-lg">
            <div className="mx-auto flex h-32 w-32 shrink-0 items-center justify-center overflow-hidden rounded-full border border-border bg-muted shadow-inner sm:h-36 sm:w-36">
                {imageUrl ? (
                    <img
                        src={imageUrl}
                        alt={member.name}
                        className="h-full w-full object-cover object-top"
                    />
                ) : (
                    <span className="text-4xl font-semibold text-cl-black sm:text-5xl">
                        {(member.name || ' ').charAt(0).toUpperCase()}
                    </span>
                )}
            </div>
            <h4 className="mt-5 font-heading text-lg font-bold tracking-tight text-cl-black">
                {member.name}
            </h4>
            {member.position && (
                <p className="mt-1.5 text-sm font-normal text-cl-black">
                    {member.position}
                </p>
            )}
        </div>
    );
}

function MemberGrid({ title, members }) {
    if (!members.length) return null;
    return (
        <div className="mt-10">
            <span className="block text-center text-xs font-semibold uppercase tracking-widest text-muted-foreground">
                {title}
            </span>
            <div className="mx-auto mt-2 h-px w-12 bg-border" aria-hidden />
            <div className="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                {members.map((member, index) => (
                    <MemberCard key={member.id ?? member.name ?? index} member={member} />
                ))}
            </div>
        </div>
    );
}

export default function TeamSection({ teamMembers = [] }) {
    const bureau = teamMembers.filter((m) => (m.category || 'bureau') === 'bureau');
    const honorary = teamMembers.filter((m) => m.category === 'honorary');
    if (bureau.length === 0 && honorary.length === 0) return null;

    const honoraryBlock =
        honorary.length > 0 ? (
            <div className="mt-16 border-t border-border pt-14">
                <MemberGrid
                    title={<TransText fr={"Membres d'honneur"} ar="أعضاء الشرف" nl="Ereleden" as="span" />}
                    members={honorary}
                />
            </div>
        ) : null;

    return (
        <section className="border-b border-border bg-cl-white py-20 lg:py-28">
            <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div className="flex flex-col items-center text-center">
                    <span className="inline-block rounded-lg border border-border bg-muted/80 px-4 py-1.5 text-center text-xs font-semibold uppercase tracking-widest text-muted-foreground">
                        <TransText fr="Gouvernance" ar="الحوكمة" nl="Bestuur" as="span" />
                    </span>
                    <h2 className="mt-5 font-heading text-3xl font-bold tracking-tight text-cl-black sm:text-4xl lg:text-5xl">
                        <TransText fr="Notre Équipe" ar="فريقنا" nl="Ons team" as="span" />
                    </h2>
                    <div className="mt-4 h-px w-12 bg-cl-beta" aria-hidden />
                </div>
                <MemberGrid
                    title={<TransText fr="Membres du bureau" ar="أعضاء المكتب" nl="Bureau-leden" as="span" />}
                    members={bureau}
                />
                {honoraryBlock}
            </div>
        </section>
    );
}
