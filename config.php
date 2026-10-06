<?php
$portfolio = [
    'name' => 'José González Silva',
    'role' => 'Backend Senior Developer',
    'location' => 'Gran Alacant, Alicante, España',
    'email' => 'jose.gonzalez@gmail.com',
    'linkedin' => 'https://www.linkedin.com/in/jose-gonzalez-silva/',
    'github' => 'https://github.com/JoseGonzalez84',
    'twitter' => '#',
    'website' => 'https://gadev.com.es/',
    'bio' => [
        "Mis primeros pinitos en la informática los dí en el año olímpico de 1992, de la mano del IBM Clónico con procesador 80286, 2Mb de RAM, 20Mb de disco duro y monitor CRT a color (todo un portento de la tecnología de la época) que trajo mi padre a casa. Desde entonces, me considero un informático entusiasta con ganas de aprender de todo (con 10 años me llegué a leer el manual de dBase IV).",
        "Me considero un tipo curioso, en todos los aspectos; me gusta aprender cosas nuevas y practicar lo que ya se. No puedo decir que no me haya rendido alguna vez pero es un recurso que detesto, así que trato de terminar mis cosas aunque el universo no me deje siempre.",
        ],
    'experience' => [
        [
            'title' => 'Software Development Specialist',
            'logo' => 'grupo_aire_logo',
            'company' => 'Aire Tech',
            'period' => '2023.9 - 0',
            'description' => 'Desarrollo de soluciones de software para UCaaS. Symfony, PHP8, PBX, OCX, MySQL, Redis, API y WebSocket. Experimentación con NodeJS.'
        ],
        [
            'title' => 'Desarrollador de Software',
            'company' => 'Artica PFMS',
            'logo' => 'pandora_logo',
            'period' => '2019.6 - 2023.3',
            'description' => 'Desarrollo de software de monitorización, resolución de bugs y adición de features. PHP, Perl, Python, JavaScript, Docker, MySQL.'
        ],
        [
            'title' => 'Desarrollador de Software .NET',
            'company' => 'Everis (NTT Data)',
            'logo' => 'everis_logo',
            'period' => '2018.9 - 2019.6',
            'description' => 'Resolución de bugs y mantenimiento de código legacy en sistemas de información. C#, Visual Basic.NET, SQL Server.'
        ],
        [
            'title' => 'Desarrollador de Software',
            'company' => 'Atramentum',
            'logo' => 'atramentum_logo',
            'period' => '2017.7 - 2018.9',
            'description' => 'Desarrollo y Mantenimiento de aplicaciones web. PHP, JavaScript, MySQL.'
        ],
    ],
    'education' => [
        [
            'degree' => 'Técnico Superior en Desarrollo de Aplicaciones Web',
            'institution' => 'IES Mare Nostrum',
            'period' => '2016 - 2018'
        ],
        [
            'degree' => 'Técnico en Emergencias Sanitarias',
            'institution' => 'IES Leonardo Da Vinci',
            'period' => '2014 - 2016'
        ],
    ],
    'skills' => [
        'Backend' => ['PHP', 'SQL', 'Postman', 'Docker'],
        'Frontend' => ['JavaScript', 'HTML5', 'CSS3'],
        'BBDD' => ['MySQL'],
        'Sistemas' => ['Docker', 'Git'],
        'Gestión de Versiones' => ['Git'],
    ],
'skillIcons' => [
        ['name' => 'PHP', 'icon' => 'php.svg', 'tooltip' => 'Lenguaje principal desde 2010\nSymfony, Laravel, APIs REST'],
        ['name' => 'Symfony', 'icon' => 'symfony.svg', 'tooltip' => 'Framework PHP favorito\nComponentes, Doctrine, Messenger'],
        ['name' => 'Linux', 'icon' => 'linux.svg', 'tooltip' => 'Entorno de trabajo diario\nBash, Docker, servidores VPS'],
        ['name' => 'MySQL', 'icon' => 'mysql.svg', 'tooltip' => 'Base de datos relacional principal\nOptimización, índices, replicación'],
        ['name' => 'Redis', 'icon' => 'redis.svg', 'tooltip' => 'Cache y colas de mensajes\nPub/Sub, sesiones, rate limiting'],
        ['name' => 'Git', 'icon' => 'git.svg', 'tooltip' => 'Control de versiones esencial\nRebase, cherry-pick, workflows'],
        ['name' => 'Javascript', 'icon' => 'javascript.svg', 'tooltip' => 'Frontend y Node.js\nES6+, TypeScript, Vue/React'],
        ['name' => 'Perl', 'icon' => 'perl.svg', 'tooltip' => 'Legacy y scripting potente\nRegex, CPAN, mantenimiento'],
        ['name' => 'dotNet', 'icon' => 'dotnet.svg', 'tooltip' => 'C# y .NET Core\nEntity Framework, Azure'],
        ['name' => 'GitLab', 'icon' => 'gitlab.svg', 'tooltip' => 'CI/CD y gestión de repos\nPipelines, Registry, Issues'],
        ['name' => 'SQLite', 'icon' => 'sqlite.svg', 'tooltip' => 'BD embebida ligera\nTesting, apps locales, edge'],
        ['name' => 'OCode', 'icon' => 'ocode.svg', 'tooltip' => 'Editor de código propio\nExtensible, ligero, open source'],
    ],
    'certifications' => [
        [
            'title' => 'Desarrollo de aplicaciones Web con NodeJS y Express',
            'issuer' => 'OpenWebinars',
            'date' => 'Ene 2024',
            'link' => 'https://openwebinars.net/cert/cSKo'
        ],
        [
            'title' => 'Curso de JavaScript Avanzado',
            'issuer' => 'OpenWebinars',
            'date' => 'Oct 2023',
            'link' => 'https://openwebinars.net/cert/uiz0'
        ],
    ],
    'projects' => [
        [
            'title' => 'CV en Astro',
            'description' => 'Mi currículum interactivo desarrollado con Astro',
            'image' => 'profile.jpg',
            'link' => '#'
        ],
        [
            'title' => 'Sistema de Comunicaciones',
            'description' => 'Sistema de comunicaciones en la nube para LCRCom',
            'image' => '#',
            'link' => '#'
        ],
        [
            'title' => 'MeetIp Pro',
            'description' => 'Mejoras y features para plataforma de comunicaciones',
            'image' => '#',
            'link' => '#'
        ],
    ],
];
?>