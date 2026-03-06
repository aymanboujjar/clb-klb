import { Link } from '@inertiajs/react';
import TransText from '@/components/TransText';

export default function HeroSection() {
    return (
        <section className="relative flex min-h-[62.5vh] items-center justify-center bg-cl-black/75 px-4 py-24">
            <div
                className="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-40"
                style={{
                    backgroundImage: `url(/assets/hero-bg.webp)`,
                }}
            />
            <div
                className="absolute inset-0"
                style={{
                    background:
                        'linear-gradient(to right, rgba(32, 18, 19, 0.625) 0%, rgba(32, 18, 19, 0.75) 50%, rgba(32, 18, 19, 0.625) 100%)',
                }}
            />
            <div className="relative z-10 mx-auto max-w-4xl text-center">
                <h1 className="mb-6 text-3xl leading-tight font-bold text-cl-white uppercase sm:text-4xl lg:text-5xl xl:text-6xl">
                    <TransText
                        fr="Le cercle des lauréats de Belgique"
                        ar="دائرة خريجي بلجيكا"
                        nl="De kring van Belgische laureaten"
                        as="span"
                    />
                </h1>
                <p className="mb-10 text-base text-cl-white/95 sm:text-lg lg:text-xl">
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
                        className="rounded-full bg-alpha px-12 py-4 text-sm font-semibold text-cl-white transition hover:bg-alpha/85"
                    >
                        <TransText
                            fr="EN SAVOIR PLUS"
                            ar="اعرف المزيد"
                            nl="MEER WETEN"
                        />
                    </Link>
                    <Link
                        href="/contact"
                        className="rounded-full border border-cl-white px-12 py-4 text-sm font-semibold text-cl-white uppercase transition hover:bg-cl-white/5"
                    >
                        <TransText
                            fr="contactez-nous"
                            ar="اتصل بنا"
                            nl="CONTACTEER ONS"
                        />
                    </Link>
                </div>
            </div>
        </section>
    );
}
