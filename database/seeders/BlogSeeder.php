<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'مرحبا بك في عالم التكنولوجيا',
                    'fr' => 'Bienvenue dans le monde de la technologie',
                    'nl' => 'Welkom in de wereld van technologie',
                ]),
                'slug' => json_encode([
                    'ar' => 'مرحبا-بك-في-عالم-التكنولوجيا',
                    'fr' => 'bienvenue-dans-le-monde-de-la-technologie',
                    'nl' => 'welkom-in-de-wereld-van-technologie',
                ]),
                'description' => json_encode([
                    'ar' => 'اكتشف أحدث التطورات في عالم التكنولوجيا والابتكار',
                    'fr' => 'Découvrez les derniers développements dans le monde de la technologie et de l\'innovation',
                    'nl' => 'Ontdek de nieuwste ontwikkelingen in de wereld van technologie en innovatie',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التكنولوجيا تتطور بسرعة كبيرة في عالمنا اليوم. نشهد تغييرات جذرية في طريقة حياتنا وعملنا.</p>',
                    'fr' => '<p>La technologie évolue rapidement dans notre monde aujourd\'hui. Nous assistons à des changements radicaux dans notre mode de vie et de travail.</p>',
                    'nl' => '<p>Technologie evolueert snel in onze wereld vandaag. We zien radicale veranderingen in onze manier van leven en werken.</p>',
                ]),
                'published_at' => now()->subDays(20),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'أثر الذكاء الاصطناعي على المستقبل',
                    'fr' => 'L\'impact de l\'intelligence artificielle sur l\'avenir',
                    'nl' => 'De impact van kunstmatige intelligentie op de toekomst',
                ]),
                'slug' => json_encode([
                    'ar' => 'اثر-الذكاء-الاصطناعي-على-المستقبل',
                    'fr' => 'impact-de-l-intelligence-artificielle-sur-l-avenir',
                    'nl' => 'impact-van-kunstmatige-intelligentie-op-de-toekomst',
                ]),
                'description' => json_encode([
                    'ar' => 'الذكاء الاصطناعي يغير طريقة تفاعلنا مع التكنولوجيا',
                    'fr' => 'L\'IA change la façon dont nous interagissons avec la technologie',
                    'nl' => 'AI verandert de manier waarop we met technologie omgaan',
                ]),
                'body' => json_encode([
                    'ar' => '<p>يُعتبر الذكاء الاصطناعي من أهم التطورات التكنولوجية في العقد القادم.</p>',
                    'fr' => '<p>L\'intelligence artificielle est considérée comme l\'une des avancées technologiques les plus importantes de la prochaine décennie.</p>',
                    'nl' => '<p>Kunstmatige intelligentie wordt beschouwd als een van de belangrijkste technologische doorbraken van het volgende decennium.</p>',
                ]),
                'published_at' => now()->subDays(18),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'نصائح لأمان البيانات الشخصية',
                    'fr' => 'Conseils pour la sécurité des données personnelles',
                    'nl' => 'Tips voor persoonlijke gegevensveiligheid',
                ]),
                'slug' => json_encode([
                    'ar' => 'نصائح-لامان-البيانات-الشخصية',
                    'fr' => 'conseils-pour-la-securite-des-donnees-personnelles',
                    'nl' => 'tips-voor-persoonlijke-gegevensveiligheid',
                ]),
                'description' => json_encode([
                    'ar' => 'كيفية حماية بياناتك الشخصية على الإنترنت',
                    'fr' => 'Comment protéger vos données personnelles en ligne',
                    'nl' => 'Hoe uw persoonlijke gegevens online te beschermen',
                ]),
                'body' => json_encode([
                    'ar' => '<p>أمان البيانات أصبح أكثر أهمية من أي وقت مضى. تعرف على الطرق الفعالة لحماية بياناتك.</p>',
                    'fr' => '<p>La sécurité des données est devenue plus importante que jamais. Découvrez les moyens efficaces de protéger vos données.</p>',
                    'nl' => '<p>Gegevensveiligheid is belangrijker dan ooit. Ontdek effectieve manieren om uw gegevens te beschermen.</p>',
                ]),
                'published_at' => now()->subDays(16),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'المتعلمون الآليون وتطبيقاتهم',
                    'fr' => 'Les algorithmes d\'apprentissage et leurs applications',
                    'nl' => 'Machine Learning-algoritmen en hun toepassingen',
                ]),
                'slug' => json_encode([
                    'ar' => 'المتعلمون-الآليون-وتطبيقاتهم',
                    'fr' => 'les-algorithmes-d-apprentissage-et-leurs-applications',
                    'nl' => 'machine-learning-algoritmen-en-hun-toepassingen',
                ]),
                'description' => json_encode([
                    'ar' => 'فهم كيفية عمل خوارزميات التعلم الآلي',
                    'fr' => 'Comprendre le fonctionnement des algorithmes d\'apprentissage automatique',
                    'nl' => 'Begrijpen hoe machine learning-algoritmen werken',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التعلم الآلي يحتاج إلى فهم عميق للبيانات والخوارزميات.</p>',
                    'fr' => '<p>L\'apprentissage automatique nécessite une compréhension approfondie des données et des algorithmes.</p>',
                    'nl' => '<p>Machine learning vereist diepgaand begrip van gegevens en algoritmen.</p>',
                ]),
                'published_at' => now()->subDays(14),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'تطور الويب والتطبيقات الحديثة',
                    'fr' => 'L\'évolution du web et des applications modernes',
                    'nl' => 'De evolutie van het web en moderne applicaties',
                ]),
                'slug' => json_encode([
                    'ar' => 'تطور-الويب-والتطبيقات-الحديثة',
                    'fr' => 'l-evolution-du-web-et-des-applications-modernes',
                    'nl' => 'de-evolutie-van-het-web-en-moderne-applicaties',
                ]),
                'description' => json_encode([
                    'ar' => 'استكشف أحدث تقنيات تطوير الويب',
                    'fr' => 'Explorez les dernières techniques de développement web',
                    'nl' => 'Verken de nieuwste webtechnologieën',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الويب المتقدم يتطلب معرفة عميقة بأحدث الأطر والمكتبات.</p>',
                    'fr' => '<p>Le web avancé nécessite une connaissance approfondie des cadres et bibliothèques les plus récents.</p>',
                    'nl' => '<p>Geavanceerde webontwikkeling vereist diepgaande kennis van de nieuwste frameworks en bibliotheken.</p>',
                ]),
                'published_at' => now()->subDays(12),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'السحابة الحوسبية والتطبيقات',
                    'fr' => 'L\'informatique en nuage et les applications',
                    'nl' => 'Cloud Computing en applicaties',
                ]),
                'slug' => json_encode([
                    'ar' => 'السحابة-الحوسبية-والتطبيقات',
                    'fr' => 'l-informatique-en-nuage-et-les-applications',
                    'nl' => 'cloud-computing-en-applicaties',
                ]),
                'description' => json_encode([
                    'ar' => 'فوائد وتطبيقات الحوسبة السحابية',
                    'fr' => 'Avantages et applications du cloud computing',
                    'nl' => 'Voordelen en toepassingen van cloud computing',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الحوسبة السحابية توفر مرونة وتوسعية لا مثيل لها.</p>',
                    'fr' => '<p>Le cloud computing offre une flexibilité et une scalabilité inégalées.</p>',
                    'nl' => '<p>Cloud computing biedt ongekende flexibiliteit en schaalbaarheid.</p>',
                ]),
                'published_at' => now()->subDays(10),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'أساسيات البرمجة للمبتدئين',
                    'fr' => 'Les bases de la programmation pour les débutants',
                    'nl' => 'De basisbeginselen van programmeren voor beginners',
                ]),
                'slug' => json_encode([
                    'ar' => 'اساسيات-البرمجة-للمبتدئين',
                    'fr' => 'les-bases-de-la-programmation-pour-les-debutants',
                    'nl' => 'de-basisbeginselen-van-programmeren-voor-beginners',
                ]),
                'description' => json_encode([
                    'ar' => 'تعلم البرمجة من الصفر',
                    'fr' => 'Apprenez la programmation à partir de zéro',
                    'nl' => 'Leer programmeren van nul',
                ]),
                'body' => json_encode([
                    'ar' => '<p>البداية في البرمجة سهلة إذا انتبهت للأساسيات بشكل جيد.</p>',
                    'fr' => '<p>Commencer la programmation est facile si vous faites attention aux bases.</p>',
                    'nl' => '<p>Beginnen met programmeren is gemakkelijk als u goed op de basisbeginselen let.</p>',
                ]),
                'published_at' => now()->subDays(8),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'أمن المعلومات والتشفير',
                    'fr' => 'Sécurité de l\'information et cryptographie',
                    'nl' => 'Informatiebeveiliging en cryptografie',
                ]),
                'slug' => json_encode([
                    'ar' => 'امن-المعلومات-والتشفير',
                    'fr' => 'securite-de-l-information-et-cryptographie',
                    'nl' => 'informatiebeveiliging-en-cryptografie',
                ]),
                'description' => json_encode([
                    'ar' => 'كيفية حماية المعلومات باستخدام التشفير',
                    'fr' => 'Comment protéger les informations à l\'aide du cryptage',
                    'nl' => 'Hoe informatie met encryptie te beveiligen',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التشفير هو المفتاح الأساسي لحماية معلوماتك الحساسة.</p>',
                    'fr' => '<p>Le cryptage est la clé fondamentale pour protéger vos informations sensibles.</p>',
                    'nl' => '<p>Versleuteling is de sleutel tot het beschermen van uw gevoelige informatie.</p>',
                ]),
                'published_at' => now()->subDays(6),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الهواتف الذكية والتطبيقات المحمولة',
                    'fr' => 'Les smartphones et les applications mobiles',
                    'nl' => 'Smartphones en mobiele applicaties',
                ]),
                'slug' => json_encode([
                    'ar' => 'الهواتف-الذكية-والتطبيقات-المحمولة',
                    'fr' => 'les-smartphones-et-les-applications-mobiles',
                    'nl' => 'smartphones-en-mobiele-applicaties',
                ]),
                'description' => json_encode([
                    'ar' => 'تطور التطبيقات المحمولة والهواتف الذكية',
                    'fr' => 'L\'évolution des applications mobiles et des smartphones',
                    'nl' => 'De evolutie van mobiele applicaties en smartphones',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التطبيقات المحمولة أصبحت جزء أساسي من حياتنا اليومية.</p>',
                    'fr' => '<p>Les applications mobiles sont devenues une partie essentielle de notre vie quotidienne.</p>',
                    'nl' => '<p>Mobiele applicaties zijn onderdeel geworden van ons dagelijks leven.</p>',
                ]),
                'published_at' => now()->subDays(4),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الشبكات والاتصالات الحديثة',
                    'fr' => 'Les réseaux et les télécommunications modernes',
                    'nl' => 'Moderne netwerken en telecommunicatie',
                ]),
                'slug' => json_encode([
                    'ar' => 'الشبكات-والاتصالات-الحديثة',
                    'fr' => 'les-reseaux-et-les-telecommunications-modernes',
                    'nl' => 'moderne-netwerken-en-telecommunicatie',
                ]),
                'description' => json_encode([
                    'ar' => 'تقنيات الشبكات الحديثة والسرعات العالية',
                    'fr' => 'Les technologies modernes de réseau et les vitesses élevées',
                    'nl' => 'Moderne netwerktechnologieën en snelheden',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الشبكات السريعة هي أساس العالم الرقمي المتقدم.</p>',
                    'fr' => '<p>Les réseaux rapides sont la base du monde numérique avancé.</p>',
                    'nl' => '<p>Snelle netwerken zijn de basis van de geavanceerde digitale wereld.</p>',
                ]),
                'published_at' => now()->subDays(2),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الواقع الافتراضي والمعزز',
                    'fr' => 'La réalité virtuelle et augmentée',
                    'nl' => 'Virtuele en augmented reality',
                ]),
                'slug' => json_encode([
                    'ar' => 'الواقع-الافتراضي-والمعزز',
                    'fr' => 'la-realite-virtuelle-et-augmentee',
                    'nl' => 'virtuele-en-augmented-reality',
                ]),
                'description' => json_encode([
                    'ar' => 'استكشاف تقنيات الواقع الافتراضي والمعزز',
                    'fr' => 'Explorer les technologies de réalité virtuelle et augmentée',
                    'nl' => 'Verken virtuele en augmented reality-technologieën',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الواقع الافتراضي يفتح آفاق جديدة للتفاعل البشري.</p>',
                    'fr' => '<p>La réalité virtuelle ouvre de nouveaux horizons d\'interaction humaine.</p>',
                    'nl' => '<p>Virtuele realiteit opent nieuwe horizonten voor menselijke interactie.</p>',
                ]),
                'published_at' => now()->subDay(),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'البحث والتطوير في التكنولوجيا',
                    'fr' => 'Recherche et développement en technologie',
                    'nl' => 'Onderzoeks- en ontwikkeling in technologie',
                ]),
                'slug' => json_encode([
                    'ar' => 'البحث-والتطوير-في-التكنولوجيا',
                    'fr' => 'recherche-et-developpement-en-technologie',
                    'nl' => 'onderzoeks-en-ontwikkeling-in-technologie',
                ]),
                'description' => json_encode([
                    'ar' => 'أهمية البحث والتطوير في تقدم المجتمع',
                    'fr' => 'L\'importance de la recherche et du développement dans le progrès de la société',
                    'nl' => 'Het belang van onderzoeks- en ontwikkeling voor maatschappelijke vooruitgang',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الاستثمار في البحث والتطوير هو استثمار في المستقبل.</p>',
                    'fr' => '<p>L\'investissement dans la recherche et le développement est un investissement dans l\'avenir.</p>',
                    'nl' => '<p>Investering in onderzoeks- en ontwikkeling is investering in de toekomst.</p>',
                ]),
                'published_at' => now(),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'المستشعرات والإنترنت الذكي',
                    'fr' => 'Les capteurs et l\'Internet des objets intelligent',
                    'nl' => 'Sensoren en intelligent Internet of Things',
                ]),
                'slug' => json_encode([
                    'ar' => 'المستشعرات-والانترنت-الذكي',
                    'fr' => 'les-capteurs-et-l-internet-des-objets-intelligent',
                    'nl' => 'sensoren-en-intelligent-internet-of-things',
                ]),
                'description' => json_encode([
                    'ar' => 'تقنيات المستشعرات والأجهزة الذكية المتصلة',
                    'fr' => 'Technologie des capteurs et appareils intelligents connectés',
                    'nl' => 'Sensortechnologie en aangesloten slimme apparaten',
                ]),
                'body' => json_encode([
                    'ar' => '<p>المستشعرات تجعل عالمنا أكثر ذكاء وتفاعل.</p>',
                    'fr' => '<p>Les capteurs rendent notre monde plus intelligent et interactif.</p>',
                    'nl' => '<p>Sensoren maken onze wereld slimmer en meer interactief.</p>',
                ]),
                'published_at' => now()->subHours(2),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الطافة النظيفة والتكنولوجيا',
                    'fr' => 'Les énergies renouvelables et la technologie',
                    'nl' => 'Hernieuwbare energie en technologie',
                ]),
                'slug' => json_encode([
                    'ar' => 'الطافة-النظيفة-والتكنولوجيا',
                    'fr' => 'les-energies-renouvelables-et-la-technologie',
                    'nl' => 'hernieuwbare-energie-en-technologie',
                ]),
                'description' => json_encode([
                    'ar' => 'دور التكنولوجيا في الطاقة النظيفة',
                    'fr' => 'Le rôle de la technologie dans les énergies propres',
                    'nl' => 'De rol van technologie in schone energie',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التكنولوجيا تلعب دوراً حاسماً في تحقيق مستقبل مستدام.</p>',
                    'fr' => '<p>La technologie joue un rôle crucial dans la réalisation d\'un avenir durable.</p>',
                    'nl' => '<p>Technologie speelt een cruciale rol in het realiseren van een duurzame toekomst.</p>',
                ]),
                'published_at' => now()->subHours(4),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الطب والتكنولوجيا الحديثة',
                    'fr' => 'La médecine et la technologie moderne',
                    'nl' => 'Geneeskunde en moderne technologie',
                ]),
                'slug' => json_encode([
                    'ar' => 'الطب-والتكنولوجيا-الحديثة',
                    'fr' => 'la-medecine-et-la-technologie-moderne',
                    'nl' => 'geneeskunde-en-moderne-technologie',
                ]),
                'description' => json_encode([
                    'ar' => 'كيف تغير التكنولوجيا الطب والرعاية الصحية',
                    'fr' => 'Comment la technologie change la médecine et les soins de santé',
                    'nl' => 'Hoe technologie geneeskunde en gezondheidszorg verandert',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الابتكارات الطبية التكنولوجية تنقذ الأرواح كل يوم.</p>',
                    'fr' => '<p>Les innovations médicales technologiques sauvent des vies chaque jour.</p>',
                    'nl' => '<p>Medische technologische innovaties redden dagelijks levens.</p>',
                ]),
                'published_at' => now()->subHours(6),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الألعاب والواقع الافتراضي المتقدم',
                    'fr' => 'Les jeux et la réalité virtuelle avancée',
                    'nl' => 'Games en geavanceerde virtuele realiteit',
                ]),
                'slug' => json_encode([
                    'ar' => 'الالعاب-والواقع-الافتراضي-المتقدم',
                    'fr' => 'les-jeux-et-la-realite-virtuelle-avancee',
                    'nl' => 'games-en-geavanceerde-virtuele-realiteit',
                ]),
                'description' => json_encode([
                    'ar' => 'تطور صناعة الألعاب والترفيه الرقمي',
                    'fr' => 'L\'évolution de l\'industrie du jeu et du divertissement numérique',
                    'nl' => 'De evolutie van de gamingindustrie en digitaal entertainment',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الألعاب الحديثة تحتاج إلى تقنيات متقدمة وجرافيكس عالية الجودة.</p>',
                    'fr' => '<p>Les jeux modernes nécessitent des technologies avancées et des graphismes de haute qualité.</p>',
                    'nl' => '<p>Moderne games vereisen geavanceerde technologie en grafische kwaliteit.</p>',
                ]),
                'published_at' => now()->subHours(8),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'البلوكتشين والعملات الرقمية',
                    'fr' => 'Blockchain et cryptocurrences',
                    'nl' => 'Blockchain en cryptovaluta',
                ]),
                'slug' => json_encode([
                    'ar' => 'البلوكتشين-والعملات-الرقمية',
                    'fr' => 'blockchain-et-cryptocurrences',
                    'nl' => 'blockchain-en-cryptovaluta',
                ]),
                'description' => json_encode([
                    'ar' => 'فهم تقنية البلوكتشين والعملات الرقمية',
                    'fr' => 'Comprendre la technologie blockchain et les cryptocurrences',
                    'nl' => 'Begrijp blockchain-technologie en cryptovaluta',
                ]),
                'body' => json_encode([
                    'ar' => '<p>البلوكتشين تغير طريقة تعاملنا مع الأموال والعقود.</p>',
                    'fr' => '<p>La blockchain change la façon dont nous gérons l\'argent et les contrats.</p>',
                    'nl' => '<p>Blockchain verandert hoe we geld en contracten beheren.</p>',
                ]),
                'published_at' => now()->subHours(10),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الاستدامة والتكنولوجيا البيئية',
                    'fr' => 'Durabilité et technologie environnementale',
                    'nl' => 'Duurzaamheid en milieutechnologie',
                ]),
                'slug' => json_encode([
                    'ar' => 'الاستدامة-والتكنولوجيا-البيئية',
                    'fr' => 'durabilite-et-technologie-environnementale',
                    'nl' => 'duurzaamheid-en-milieutechnologie',
                ]),
                'description' => json_encode([
                    'ar' => 'تقنيات صديقة للبيئة والاستدامة',
                    'fr' => 'Technologies respectueuses de l\'environnement et durabilité',
                    'nl' => 'Milieuvriendelijke technologieën en duurzaamheid',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التكنولوجيا الخضراء هي مستقبلنا المشترك.</p>',
                    'fr' => '<p>La technologie verte est notre avenir commun.</p>',
                    'nl' => '<p>Groene technologie is onze gezamenlijke toekomst.</p>',
                ]),
                'published_at' => now()->subHours(12),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'التعليم الرقمي والتعلم عن بعد',
                    'fr' => 'Éducation numérique et apprentissage à distance',
                    'nl' => 'Digitaal onderwijs en online leren',
                ]),
                'slug' => json_encode([
                    'ar' => 'التعليم-الرقمي-والتعلم-عن-بعد',
                    'fr' => 'education-numerique-et-apprentissage-a-distance',
                    'nl' => 'digitaal-onderwijs-en-online-leren',
                ]),
                'description' => json_encode([
                    'ar' => 'تحول التعليم باستخدام التكنولوجيا الحديثة',
                    'fr' => 'La transformation de l\'éducation avec la technologie moderne',
                    'nl' => 'De transformatie van onderwijs door moderne technologie',
                ]),
                'body' => json_encode([
                    'ar' => '<p>التعليم عن بعد أصبح جزء من واقعنا الجديد.</p>',
                    'fr' => '<p>L\'apprentissage à distance est devenu une partie de notre nouvelle réalité.</p>',
                    'nl' => '<p>Online leren is onderdeel van onze nieuwe realiteit.</p>',
                ]),
                'published_at' => now()->subHours(14),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'المستقبل التكنولوجي والتنبؤات',
                    'fr' => 'L\'avenir technologique et les prédictions',
                    'nl' => 'De technologische toekomst en voorspellingen',
                ]),
                'slug' => json_encode([
                    'ar' => 'المستقبل-التكنولوجي-والتنبؤات',
                    'fr' => 'l-avenir-technologique-et-les-predictions',
                    'nl' => 'de-technologische-toekomst-en-voorspellingen',
                ]),
                'description' => json_encode([
                    'ar' => 'ما الذي ننتظره من المستقبل التكنولوجي',
                    'fr' => 'À quoi s\'attendre de l\'avenir technologique',
                    'nl' => 'Wat te verwachten van de technologische toekomst',
                ]),
                'body' => json_encode([
                    'ar' => '<p>المستقبل يحمل الكثير من الاحتماليات التكنولوجية المثيرة.</p>',
                    'fr' => '<p>L\'avenir recèle de nombreuses possibilités technologiques intéressantes.</p>',
                    'nl' => '<p>De toekomst biedt veel interessante technologische mogelijkheden.</p>',
                ]),
                'published_at' => now()->subHours(16),
            ],
            [
                'image' => 'blogs/PyCTgg94Guly8ZjWAWaGkD5Jv7gn7YCZdsMIhT6z.webp',
                'title' => json_encode([
                    'ar' => 'الروبوتات والأتمتة الصناعية',
                    'fr' => 'Les robots et l\'automatisation industrielle',
                    'nl' => 'Robots en industriële automatisering',
                ]),
                'slug' => json_encode([
                    'ar' => 'الروبوتات-والاتمتة-الصناعية',
                    'fr' => 'les-robots-et-l-automatisation-industrielle',
                    'nl' => 'robots-en-industriele-automatisering',
                ]),
                'description' => json_encode([
                    'ar' => 'دور الروبوتات في تطور الصناعة',
                    'fr' => 'Le rôle des robots dans le développement de l\'industrie',
                    'nl' => 'De rol van robots in industriële ontwikkeling',
                ]),
                'body' => json_encode([
                    'ar' => '<p>الروبوتات تزيد الإنتاجية وتقلل الأخطاء البشرية.</p>',
                    'fr' => '<p>Les robots augmentent la productivité et réduisent les erreurs humaines.</p>',
                    'nl' => '<p>Robots verhogen de productiviteit en verminderen menselijke fouten.</p>',
                ]),
                'published_at' => now()->subHours(18),
            ],
        ];

        DB::table('blogs')->insert($blogs);
    }
}
