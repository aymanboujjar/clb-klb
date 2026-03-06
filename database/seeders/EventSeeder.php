<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $events = [
            [
                'title'       => json_encode(['fr' => "F'tor-Débat : Leadership Féminin, Réalités Et Défis", 'ar' => "إفطار-نقاش: القيادة النسائية، الواقع والتحديات", 'nl' => "F'tor-Debat: Vrouwelijk Leiderschap, Realiteiten en Uitdagingen"]),
                'description' => json_encode(['fr' => "Rencontre exceptionnelle avec Dr Younes Sakkouri, Ministre de l'Inclusion...", 'ar' => "لقاء استثنائي مع الدكتور يونس السكوري، وزير الإدماج...", 'nl' => "Uitzonderlijke ontmoeting met Dr. Younes Sakkouri, Minister van Inclusie..."]),
                'date'        => '2026-03-06',
                'time'        => '17:30:00',
                'categorie'   => json_encode(['fr' => 'Conférence', 'ar' => 'مؤتمر', 'nl' => 'Conferentie']),
                'price'       => 300,
                'image'       => 'https://images.unsplash.com/photo-1551836022-deb4988cc6c0?w=800&q=80',
                'location'    => 'Cinéma Renaissance, Rabat',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Gala Annuel des Lauréats de Belgique', 'ar' => 'الحفل السنوي لخريجي بلجيكا', 'nl' => 'Jaarlijks Gala van Belgische Laureaten']),
                'description' => json_encode(['fr' => "Célébrez l'excellence et l'amitié maroco-belge lors de notre prestigieux gala annuel. Dîner...", 'ar' => "احتفلوا بالتميز والصداقة المغربية البلجيكية خلال حفلنا السنوي المرموق. عشاء...", 'nl' => "Vier de uitmuntendheid en de Marokkaans-Belgische vriendschap tijdens ons prestigieus jaarlijks gala. Diner..."]),
                'date'        => '2026-04-15',
                'time'        => '19:00:00',
                'categorie'   => json_encode(['fr' => 'Gala', 'ar' => 'حفل', 'nl' => 'Gala']),
                'price'       => 0,
                'image'       => 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=800&q=80',
                'location'    => 'Hôtel Sofitel, Casablanca',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Afterwork B2B : Synergies Économiques', 'ar' => 'لقاء مهني: التآزر الاقتصادي', 'nl' => 'Afterwork B2B: Economische Synergieën']),
                'description' => json_encode(['fr' => 'Une soirée de réseautage dédiée aux entrepreneurs et cadres dirigeants pour créer de nouvelles opportunités...', 'ar' => 'أمسية تواصل مخصصة لرواد الأعمال والمديرين التنفيذيين لخلق فرص جديدة...', 'nl' => 'Een netwerkevenement gewijd aan ondernemers en leidinggevenden om nieuwe kansen te creëren...']),
                'date'        => '2026-05-28',
                'time'        => '18:30:00',
                'categorie'   => json_encode(['fr' => 'Networking', 'ar' => 'تواصل', 'nl' => 'Networking']),
                'price'       => 0,
                'image'       => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&q=80',
                'location'    => 'The View Hotel, Rabat',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Forum Innovation & Startups', 'ar' => 'منتدى الابتكار والشركات الناشئة', 'nl' => 'Innovatie & Startups Forum']),
                'description' => json_encode(['fr' => "Une journée dédiée à l'innovation et aux startups marocaines et internationales.", 'ar' => "يوم مخصص للابتكار والشركات الناشئة المغربية والدولية.", 'nl' => "Een dag gewijd aan innovatie en startups uit Marokko en internationaal."]),
                'date'        => '2026-06-10',
                'time'        => '10:00:00',
                'categorie'   => json_encode(['fr' => 'Forum', 'ar' => 'منتدى', 'nl' => 'Forum']),
                'price'       => 150,
                'image'       => 'https://images.unsplash.com/photo-1515169067868-5387ec356754?w=800&q=80',
                'location'    => 'Technopark, Casablanca',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Workshop : Leadership des Jeunes', 'ar' => 'ورشة: قيادة الشباب', 'nl' => 'Workshop: Jongerenleiderschap']),
                'description' => json_encode(['fr' => "Atelier interactif pour développer les compétences de leadership chez les jeunes professionnels.", 'ar' => "ورشة تفاعلية لتطوير مهارات القيادة لدى الشباب.", 'nl' => "Interactieve workshop om leiderschapsvaardigheden bij jongeren te ontwikkelen."]),
                'date'        => '2026-06-25',
                'time'        => '14:00:00',
                'categorie'   => json_encode(['fr' => 'Workshop', 'ar' => 'ورشة', 'nl' => 'Workshop']),
                'price'       => 100,
                'image'       => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=80',
                'location'    => 'ESCA Business School, Casablanca',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Conférence : Diplomatie Économique', 'ar' => 'مؤتمر: الدبلوماسية الاقتصادية', 'nl' => 'Conferentie: Economische Diplomatie']),
                'description' => json_encode(['fr' => "Discussion autour du rôle de la diplomatie dans le développement économique.", 'ar' => "نقاش حول دور الدبلوماسية في التنمية الاقتصادية.", 'nl' => "Discussie over de rol van diplomatie in economische ontwikkeling."]),
                'date'        => '2026-07-12',
                'time'        => '16:00:00',
                'categorie'   => json_encode(['fr' => 'Conférence', 'ar' => 'مؤتمر', 'nl' => 'Conferentie']),
                'price'       => 0,
                'image'       => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=800&q=80',
                'location'    => 'Université Mohammed V, Rabat',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Dîner de Networking International', 'ar' => 'عشاء تواصل دولي', 'nl' => 'Internationaal Netwerkdiner']),
                'description' => json_encode(['fr' => "Rencontrez des leaders internationaux et développez votre réseau professionnel.", 'ar' => "تعرفوا على قادة دوليين وطوروا شبكتكم المهنية.", 'nl' => "Ontmoet internationale leiders en ontwikkel uw professioneel netwerk."]),
                'date'        => '2026-08-05',
                'time'        => '20:00:00',
                'categorie'   => json_encode(['fr' => 'Networking', 'ar' => 'تواصل', 'nl' => 'Networking']),
                'price'       => 250,
                'image'       => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=800&q=80',
                'location'    => 'Hyatt Regency, Casablanca',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Séminaire : Entrepreneuriat Féminin', 'ar' => 'ندوة: ريادة الأعمال النسائية', 'nl' => 'Seminar: Vrouwelijk Ondernemerschap']),
                'description' => json_encode(['fr' => "Séminaire dédié à l'autonomisation économique des femmes entrepreneures.", 'ar' => "ندوة مخصصة لتمكين رائدات الأعمال اقتصاديًا.", 'nl' => "Seminar gewijd aan economische empowerment van vrouwelijke ondernemers."]),
                'date'        => '2026-09-18',
                'time'        => '15:30:00',
                'categorie'   => json_encode(['fr' => 'Séminaire', 'ar' => 'ندوة', 'nl' => 'Seminar']),
                'price'       => 120,
                'image'       => 'https://images.unsplash.com/photo-1558403194-611308249627?w=800&q=80',
                'location'    => 'Palais des Congrès, Marrakech',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => json_encode(['fr' => 'Rencontre Culturelle Maroc-Belgique', 'ar' => 'لقاء ثقافي مغربي بلجيكي', 'nl' => 'Culturele Ontmoeting Marokko-België']),
                'description' => json_encode(['fr' => "Une soirée culturelle célébrant l'amitié entre le Maroc et la Belgique.", 'ar' => "أمسية ثقافية تحتفي بالصداقة بين المغرب وبلجيكا.", 'nl' => "Een culturele avond ter viering van de vriendschap tussen Marokko en België."]),
                'date'        => '2026-10-10',
                'time'        => '18:00:00',
                'categorie'   => json_encode(['fr' => 'Culture', 'ar' => 'ثقافة', 'nl' => 'Cultuur']),
                'price'       => 0,
                'image'       => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800&q=80',
                'location'    => 'Villa des Arts, Casablanca',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ];

        DB::table('events')->insert($events);
    }
}
