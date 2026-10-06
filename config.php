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
            'institution' => 'IES Mare Nostrum (Alicante)',
            'location' => 'https://maps.app.goo.gl/4ymViVV3DqJwYHp27',
            'logo' => 'formacion/ies-marenostrum.jpg',
            'period' => '2016 - 2018'
        ],
        [
            'degree' => 'Técnico en Emergencias Sanitarias',
            'institution' => 'IES Leonardo Da Vinci (Alicante)',
            'location' => 'https://maps.app.goo.gl/qypkPTmfcDyBhZX19',
            'logo' => 'formacion/ies-leonardodavinci.jpg',
            'period' => '2014 - 2016'
        ],
        [
            'degree' => 'Técnico en Explotación de Sistemas Informáticos',
            'institution' => 'IES Juan de la Cierva (Madrid)',
            'location' => 'https://maps.app.goo.gl/UHVJzsZaxFfFjGpM7',
            'logo' => 'formacion/ies-juandelacierva.jpg',
            'period' => '2016 - 2018'
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
        ['name' => 'PHP', 'icon' => 'php.svg', 'tooltip' => 'Llevo trabajando con éste lenguaje desde 2017. Es mi lenguage de predilección.'],
        ['name' => 'Symfony', 'icon' => 'symfony.svg', 'tooltip' => 'Aprendiendo a diario con Symfony desde 2023. Desarrollo principal de mi actual proyecto.'],
        ['name' => 'UNIX/Linux', 'icon' => 'linux.svg', 'tooltip' => 'Desde 2007 como entorno de trabajo diario. Shell scripting y Mantenimiento, tambien habitualmente como sistema operativo doméstico.'],
        ['name' => 'MySQL', 'icon' => 'mysql.svg', 'tooltip' => 'Base de datos por excelencia en la inmensa mayoría de proyectos en los que he colaborado.'],
        ['name' => 'Redis', 'icon' => 'redis.svg', 'tooltip' => 'Tanto en la parte de desarrollo como en la de sistemas, está en mi día a día.'],
        ['name' => 'Git', 'icon' => 'git.svg', 'tooltip' => 'Control de versiones, tanto en linea de comando como desde plataformas como GitLab'],
        ['name' => 'Javascript', 'icon' => 'javascript.svg', 'tooltip' => 'Scripting ocasional, mi formación inicial se hizo con este lenguaje.'],
        ['name' => 'Perl', 'icon' => 'perl.svg', 'tooltip' => 'Durante 3 años, estuve manteniendo un proyecto con Perl 5.20.'],
        ['name' => '.NET', 'icon' => 'dotnet.svg', 'tooltip' => 'Mantenimiento de dos proyectos con backend .NET, sobre todo C# y Visual Basic.'],
        ['name' => 'GitLab', 'icon' => 'gitlab.svg', 'tooltip' => 'Integración contínua, mantenimiento y distribución de releases desde la plataforma y manejo integral de su API.'],
        ['name' => 'SQLite', 'icon' => 'sqlite.svg', 'tooltip' => 'Integración en proyectos sencillos y personales desde hace ya varios años.'],
        ['name' => 'OpenCode', 'icon' => 'ocode.svg', 'tooltip' => 'Desde 2025, es mi inseparable ayudante para mis proyectos tanto personales como profesionales.'],
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