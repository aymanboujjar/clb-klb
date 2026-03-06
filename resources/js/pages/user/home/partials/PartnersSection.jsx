import TransText from '@/components/TransText';

function PartnerLogo({ partner }) {
    const logoUrl = partner.logoUrl ?? partner.logo_path;
    return (
        <div className="flex h-24 w-[calc(25%-1.5rem)] flex-shrink-0 items-center justify-center rounded-xl border border-border bg-card p-4 shadow-sm transition hover:shadow-md sm:h-32 lg:h-36">
            <img
                src={logoUrl}
                alt={partner.name}
                className="max-h-full max-w-full object-contain"
            />
        </div>
    );
}

export default function PartnersSection({ partners = [] }) {
    if (partners.length === 0) return null;
    return (
        <section className="border-b border-border bg-cl-blue-light/40 py-16 lg:py-24">
            <div className="mx-auto max-w-7xl px-4 lg:px-8">
                <p className="text-center text-sm font-semibold uppercase tracking-[0.2em] text-cl-beta">
                    <TransText fr="Nos Partenaires" ar="شركاؤنا" nl="Onze partners" as="span" />
                </p>
                <h2 className="mt-3 text-center text-3xl font-bold tracking-tight text-foreground lg:text-4xl">
                    <TransText fr="Nos Partenaires" ar="شركاؤنا" nl="Onze partners" as="span" />
                </h2>
                <div className="mx-auto mt-3 h-1 w-16 rounded-full bg-cl-beta/60" aria-hidden />
            </div>
            <div className="group/carousel mx-auto mt-12 max-w-7xl overflow-hidden px-4 lg:px-8">
                <div className="carousel-loop flex gap-8">
                    {partners.map((partner, i) => (
                        <PartnerLogo key={`a-${partner.id ?? i}`} partner={partner} />
                    ))}
                    {partners.map((partner, i) => (
                        <PartnerLogo key={`b-${partner.id ?? i}`} partner={partner} />
                    ))}
                </div>
            </div>
        </section>
    );
}
