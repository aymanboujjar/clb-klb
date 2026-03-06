import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import HeroSection from './partials/HeroSection';
import EventsSection from './partials/EventsSection';
import StrategicObjectivesSection from './partials/StrategicObjectivesSection';
import NetworkVideoSection from './partials/NetworkVideoSection';
import TeamSection from './partials/TeamSection';
import PartnersSection from './partials/PartnersSection';

function HomeIndex() {
    return (
        <>
            <AppLayout>
                <Head title="Accueil" />
                <HeroSection />
                <EventsSection />
                <StrategicObjectivesSection />
                <NetworkVideoSection />
                <TeamSection />
                <PartnersSection />
            </AppLayout>
        </>
    );
}

export default HomeIndex;
