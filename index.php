<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de <?= $portfolio['name']; ?> - <?= $portfolio['role']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo"><?= $portfolio['name']; ?></div>
            <ul>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#experience">Experiencia</a></li>
                <li><a href="#projects">Proyectos</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1><?= htmlspecialchars($portfolio['name']); ?></h1>
            <p><?= htmlspecialchars($portfolio['role']); ?></p>
            <a href="#about" class="btn">Ver más</a>
        </div>
    </header>

    <main class="section" id="about">
        <h2 class="about-me">Este soy yo...</h2>
        <div class="about-content">
            <?php foreach ($portfolio['bio'] as $bioLine): ?>
                <p class="about-text"><?= htmlspecialchars($bioLine); ?></p>
            <?php endforeach; ?>
        </div>
    </main>

    <main class="section" id="skills">
        <h2>Que es lo que mas domino</h2>
        <div class="skills-grid">
            <?php foreach ($portfolio['skillIcons'] as $index => $skill): ?>
            <article class="skill-card">
                <div class="skill-icon-wrapper">
                    <img src="images/svg/<?= htmlspecialchars($skill['icon']) ?>" alt="<?= htmlspecialchars($skill['name']) ?>" class="skill-icon">
                </div>
                <h3><?= htmlspecialchars($skill['name']) ?></h3>
                <div class="skill-tooltip"><?= nl2br(htmlspecialchars($skill['tooltip'] ?? '')) ?></div>
            </article>
            <?php endforeach; ?>
        </div>
    </main>

    <main class="section" id="experience">
        <h2>Donde he trabajado</h2>
        <div class="experience-grid">
            <?php foreach ($portfolio['experience'] as $exp): ?>
            <div class="experience-item">
                <div class="experience-logo">
                    <img src="./images/<?= htmlspecialchars($exp['logo']); ?>.jpg" alt="Logotipo de <?= htmlspecialchars($exp['company']); ?>">
                </div>
                <div class="experience-content">
                    <h3><?= htmlspecialchars($exp['title']); ?></h3>
                    <p class="experience-meta"><strong><?= htmlspecialchars($exp['company']); ?></strong><span aria-hidden="true">·</span><?= htmlspecialchars($exp['period']); ?></p>
                    <p><?= htmlspecialchars($exp['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <main class="section" id="projects">
        <h2>Proyectos Destacados</h2>
        <div class="projects-grid">
            <?php foreach ($portfolio['projects'] as $project): ?>
            <div class="project-card">
                <img src="images/<?= htmlspecialchars($project['image']); ?>" alt="<?= htmlspecialchars($project['title']); ?>">
                <div>
                    <h3><?= htmlspecialchars($project['title']); ?></h3>
                    <p><?= htmlspecialchars($project['description']); ?></p>
                    <a href="<?= htmlspecialchars($project['link']); ?>" class="btn">Ver detalles</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer id="contact">
        <p>© 2024 José González Silva. <a href="<?= htmlspecialchars($portfolio['linkedin']); ?>">LinkedIn</a> | <a href="<?= htmlspecialchars($portfolio['github']); ?>">GitHub</a></p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>