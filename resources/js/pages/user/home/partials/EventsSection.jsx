import { Link } from '@inertiajs/react';
import TransText from '@/components/TransText';
import { FeaturedEventCard, SmallEventCard } from './EventCard';

export default function EventsSection({ recentEvents = [] }) {
    const list = Array.isArray(recentEvents) ? recentEvents : [];
    const featured = list[0] ?? null;
    const smallList = list.slice(1, 4);

    return (
        <section className="border-b border-border bg-cl-blue-light/40 py-16 lg:py-24">
            <div className="mx-auto max-w-7xl px-4 lg:px-8">
                <div className="flex flex-col items-center text-center">
                    <span className="inline-block rounded-full border border-cl-yellow/50 bg-cl-yellow/10 px-4 py-1.5 text-center text-xs font-semibold uppercase tracking-[0.2em] text-cl-yellow">
                        <TransText fr="Nos Événements" ar="فعالياتنا" nl="Onze evenementen" as="span" />
                    </span>
                    <h2 className="mt-4 font-heading text-3xl font-bold tracking-tight text-foreground lg:text-4xl">
                        <TransText fr="Événements Récents" ar="أحدث الفعاليات" nl="Recente evenementen" as="span" />
                    </h2>
                    <div className="mt-3 h-1 w-16 rounded-full bg-cl-yellow/70" aria-hidden />
                </div>

                {list.length === 0 ? (
                    <div className="mt-12 rounded-xl border border-dashed border-cl-beta/40 bg-cl-white/60 py-16 text-center">
                        <p className="text-muted-foreground">
                            <TransText fr="Aucun événement pour le moment." ar="لا توجد فعاليات حالياً." nl="Nog geen evenementen." as="span" />
                        </p>
                    </div>
                ) : (
                    <div className="mt-12 grid gap-8 lg:grid-cols-3">
                        <div className="lg:col-span-2">
                            <FeaturedEventCard event={featured} />
                        </div>
                        <div className="flex flex-col gap-4">
                            {smallList.map((evt) => (
                                <SmallEventCard key={evt.id} event={evt} />
                            ))}
                        </div>
                    </div>
                )}

                <div className="mt-10 text-center">
                    <Link
                        href="/events"
                        className="inline-flex items-center gap-2 rounded-full border-2 border-alpha bg-cl-white px-6 py-3 text-base font-bold text-alpha shadow-sm transition hover:scale-[1.02] hover:bg-alpha hover:text-cl-white hover:shadow-md active:scale-[0.98]"
                    >
                        <TransText fr="VOIR TOUT L'AGENDA" ar="عرض كل الأجندة" nl="BEKIJK VOLLEDIGE AGENDA" as="span" />
                        <svg className="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                        </svg>
                    </Link>
                </div>
            </div>
        </section>
    );
}
