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
                <li><a href="#education">Formación</a></li>
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
        <h2 class="about-me">Este soy yo</h2>
        <div class="about-content">
            <div class="cat-hotspot" data-tooltip="Yo soy París, su fiel compañera de teclado, tengo al ratón a raya!" style="bottom: 0%; left: 76%; width: 105px; height: 180px;"></div>
            <?php foreach ($portfolio['bio'] as $bioLine): ?>
                <p class="about-text"><?= htmlspecialchars($bioLine); ?></p>
            <?php endforeach; ?>
        </div>
    </main>

    <main class="section" id="skills">
        <h2>Mi stack tecnológico</h2>
        <div class="skills-grid">
            <?php foreach ($portfolio['skillIcons'] as $index => $skill): ?>
            <article class="skill-card" data-tooltip="<?= htmlspecialchars($skill['tooltip'] ?? '', ENT_QUOTES) ?>" data-skill-name="<?= htmlspecialchars($skill['name'], ENT_QUOTES) ?>">
                <div class="skill-icon-wrapper">
                    <img src="images/svg/<?= htmlspecialchars($skill['icon']) ?>" alt="<?= htmlspecialchars($skill['name']) ?>" class="skill-icon">
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </main>

    <main class="section" id="education">
        <h2>Donde me he formado</h2>
        <div class="education-grid">
            <?php foreach ($portfolio['education'] as $edu): ?>
            <div class="education-item">
                <div class="education-content">
                    <h3><?= htmlspecialchars($edu['degree']); ?></h3>
                    <p class="education-meta"><strong><?= htmlspecialchars($edu['institution']); ?></strong><span aria-hidden="true">·</span><?= htmlspecialchars($edu['period']); ?></p>
                    <?php if (!empty($edu['location'])): ?>
                    <p class="education-location">
                        <svg class="education-location-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <a href="<?= htmlspecialchars($edu['location']); ?>" target="_blank" rel="noopener noreferrer">Ver ubicación</a>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="education-logo">
                    <img src="./images/<?= htmlspecialchars($edu['logo']); ?>" alt="Logotipo de <?= htmlspecialchars($edu['institution']); ?>">
                </div>
            </div>
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

        // Tooltip functionality
        const tooltip = document.createElement('div');
        tooltip.className = 'skill-tooltip';
        document.body.appendChild(tooltip);

        let currentCard = null;
        let hideTimeout = null;

        function showTooltip(card) {
            const text = card.dataset.tooltip;
            const skillName = card.dataset.skillName;
            if (!text) return;

            tooltip.innerHTML = `<div class="tooltip-title">${skillName}</div>${text.replace(/\n/g, '<br>')}`;
            document.body.appendChild(tooltip);

            const rect = card.getBoundingClientRect();
            const cardIndex = [...card.parentElement.children].indexOf(card);
            const isBottomRow = cardIndex >= 6;
            const tooltipRect = tooltip.getBoundingClientRect();

            let left = rect.left + rect.width / 2 - tooltipRect.width / 2;
            let top;

            if (isBottomRow) {
                top = rect.bottom + 8;
                tooltip.dataset.position = 'bottom';
            } else {
                top = rect.top - tooltipRect.height - 8;
                tooltip.dataset.position = 'top';
            }

            // Keep tooltip in viewport
            left = Math.max(8, Math.min(left, window.innerWidth - tooltipRect.width - 8));

            tooltip.style.left = left + 'px';
            tooltip.style.top = top + 'px';
            tooltip.style.opacity = '1';
            tooltip.style.visibility = 'visible';
            tooltip.style.transform = 'translateY(0)';
        }

        function hideTooltip() {
            tooltip.style.opacity = '0';
            tooltip.style.visibility = 'hidden';
        }

        document.querySelectorAll('.skill-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                clearTimeout(hideTimeout);
                currentCard = card;
                showTooltip(card);
            });

            card.addEventListener('mouseleave', () => {
                currentCard = null;
                hideTimeout = setTimeout(hideTooltip, 100);
            });
        });

        tooltip.addEventListener('mouseenter', () => {
            clearTimeout(hideTimeout);
            tooltip.style.opacity = '1';
            tooltip.style.visibility = 'visible';
        });

        tooltip.addEventListener('mouseleave', () => {
            hideTooltip();
        });

        window.addEventListener('scroll', () => {
            if (currentCard) showTooltip(currentCard);
        }, { passive: true });

        window.addEventListener('resize', () => {
            if (currentCard) showTooltip(currentCard);
        });
    </script>
</body>
</html>