import { Link } from '@inertiajs/react';
import TransText from '@/components/TransText';

export default function HeroSection() {
    return (
        <section className="relative flex min-h-[90vh] items-center justify-center overflow-hidden bg-cl-black px-4 py-28">
            <div
                className="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-35"
                style={{
                    backgroundImage: 'url(https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=1920&q=80)',
                }}
            />
            <div className="absolute inset-0 bg-gradient-to-b from-cl-black/70 via-cl-black/60 to-cl-black/90" />
            <div className="relative z-10 mx-auto max-w-4xl text-center">
                <span className="mb-6 inline-block rounded-full border border-cl-white/30 bg-cl-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.25em] text-cl-white/90">
                    <TransText fr="Cercle d'excellence" ar="دائرة الامتياز" nl="Kring van uitmuntendheid" as="span" />
                </span>
                <h1 className="mb-6 text-3xl font-bold leading-tight tracking-tight text-cl-white drop-shadow-sm sm:text-4xl lg:text-5xl xl:text-6xl">
                    <TransText
                        fr="Le cercle des lauréats de Belgique"
                        ar="دائرة خريجي بلجيكا"
                        nl="De kring van Belgische laureaten"
                        as="span"
                    />
                </h1>
                <p className="mx-auto mb-12 max-w-2xl text-base leading-relaxed text-cl-white/90 sm:text-lg lg:text-xl">
                    <TransText
                        fr="Le club d'excellence des diplômés de l'enseignement belge du Maroc. Connexion des talents, créateur des opportunités, d'un coup d'oeil le monde."
                        ar="نادي امتياز خريجي التعليم البلجيكي في المغرب. ربط المواهب، خلق الفرص، والعالم بنظرة واحدة."
                        nl="De club van uitmuntende afgestudeerden van het Belgisch onderwijs in Marokko. Talenten verbinden, kansen creëren, de wereld in één oogopslag."
                        as="span"
                    />
                </p>
                <div className="flex flex-wrap items-center justify-center gap-4">
                    <Link
                        href="/a-propos"
                        className="rounded-full bg-alpha px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-cl-white shadow-lg transition hover:scale-[1.03] hover:shadow-xl active:scale-[0.98]"
                    >
                        <TransText fr="EN SAVOIR PLUS" ar="اعرف المزيد" nl="MEER WETEN" as="span" />
                    </Link>
                    <Link
                        href="/a-propos"
                        className="rounded-full border-2 border-cl-white bg-transparent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-cl-white transition hover:bg-cl-white/10 active:scale-[0.98]"
                    >
                        <TransText fr="ADHÉRER AU CLUB" ar="انضم إلى النادي" nl="LID WORDEN VAN DE CLUB" as="span" />
                    </Link>
                </div>
            </div>
        </section>
    );
}
