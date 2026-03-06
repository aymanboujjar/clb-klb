import TransText from '@/components/TransText';

const partners = [
    { name: 'APEFE', logoUrl: 'assets/partners/apefe.png' },
    { name: 'LIONSGEEK', logoUrl: 'assets/partners/lionsgeek.webp' },
    { name: 'WB-EBM', logoUrl: 'assets/partners/wallonie-bruxelles-ebm.webp' },
    {
        name: 'WALLONIE-BRUXELLES',
        logoUrl: 'assets/partners/wallonie-bruxelles.webp',
    },
    { name: 'LIEGE', logoUrl: 'assets/partners/liege.webp' },
    { name: 'ULB', logoUrl: 'assets/partners/ulb.webp' },
];

export default function PartnersSection() {
    return (
        <section className="border-b border-border bg-background py-16 lg:py-24">
            <div className="mx-auto max-w-7xl px-4 lg:px-8">
                <p className="text-center text-xs font-medium tracking-wider text-alpha uppercase">
                    <TransText
                        fr="Nos Partenaires"
                        ar="شركاؤنا"
                        nl="Onze partners"
                        as="span"
                    />
                </p>
                <h2 className="mt-2 text-center text-3xl font-bold text-foreground lg:text-4xl">
                    <TransText
                        fr="Nos Partenaires"
                        ar="شركاؤنا"
                        nl="Onze partners"
                        as="span"
                    />
                </h2>
                <div className="mt-12 flex flex-wrap items-center justify-center gap-12 grayscale">
                    {partners.map((partner, i) => (
                        <div
                            key={i}
                            className="flex h-20 w-28 items-center justify-center md:h-24 md:w-32 lg:h-28 lg:w-36"
                        >
                            {partner.logoUrl ? (
                                <img
                                    src={partner.logoUrl}
                                    alt={partner.name}
                                    className="max-h-full max-w-full"
                                />
                            ) : (
                                <span className="text-lg font-semibold text-muted-foreground">
                                    {partner.name}
                                </span>
                            )}
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}
