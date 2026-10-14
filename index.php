<?php 
    require_once 'config.php';
    require_once 'RestClient.php';
?>
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

        <details class="education-certifications">
            <summary class="education-certifications-summary">
                <span>Otros cursos y certificaciones</span>
                <svg class="education-certifications-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
            </summary>
            <div class="education-certifications-content">
                <?php
                $certs = $portfolio['certifications'];
                usort($certs, function($a, $b) {
                    return strtotime($b['date']) - strtotime($a['date']);
                });
                foreach ($certs as $index => $cert): ?>
                <article class="education-certification-item <?= $index % 2 === 0 ? 'education-certification-left' : 'education-certification-right' ?>">
                    <div class="education-certification-card">
                        <header class="education-certification-header">
                            <time class="education-certification-date"><?= htmlspecialchars($cert['date']) ?></time>
                        </header>
                        <div class="education-certification-body">
                            <h4 class="education-certification-title"><?= htmlspecialchars($cert['title']) ?></h4>
                            <p class="education-certification-issuer"><?= htmlspecialchars($cert['issuer']) ?></p>
                        </div>
                        <footer class="education-certification-footer">
                            <?php if (!empty($cert['link'])): ?>
                            <a href="<?= htmlspecialchars($cert['link']) ?>" target="_blank" rel="noopener noreferrer" class="education-certification-link">
                                Ver certificado
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                            </a>
                            <?php else: ?>
                            <span class="education-certification-unavailable">No hay enlace para ver el certificado</span>
                            <?php endif; ?>
                        </footer>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </details>
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
        <h2 id="projects-title">Proyectos Destacados</h2>
        <div class="projects-carousel" role="region" aria-labelledby="projects-title">
            <div class="projects-carousel-controls">
                <button class="projects-carousel-button" type="button" data-direction="previous" aria-label="Ver proyectos anteriores" disabled>
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m15 18-6-6 6-6" /></svg>
                </button>
                <button class="projects-carousel-button" type="button" data-direction="next" aria-label="Ver proyectos siguientes" disabled>
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m9 18 6-6-6-6" /></svg>
                </button>
            </div>
            <div class="projects-track" aria-label="Proyectos">
            <?php foreach ($portfolio['projects'] as $project): ?>
                <?php
                    $projectName = $project['name'] ?? $project['title'] ?? 'Proyecto';
                    $projectUrl = $project['html_url'] ?? $project['link'] ?? '#';
                    $language = $project['language'] ?? '';
                    $languageKey = strtolower($language);
                    $languageClasses = [
                        'php' => 'php',
                        'javascript' => 'javascript',
                        'shell' => 'shell',
                        'bash' => 'shell',
                        'python' => 'python',
                    ];
                    $languageLabels = [
                        'php' => 'PHP',
                        'javascript' => 'JS',
                        'shell' => 'SH',
                        'bash' => 'SH',
                        'python' => 'Py',
                    ];
                    $languageClass = $languageClasses[$languageKey] ?? 'other';
                    $languageLabel = $languageLabels[$languageKey] ?? ($language !== '' ? strtoupper(substr($language, 0, 2)) : 'N/A');
                ?>
                <article class="project-card">
                    <h3><?= htmlspecialchars($projectName); ?></h3>
                    <p><?= htmlspecialchars($project['description'] ?? 'Sin descripción disponible.'); ?></p>
                    <div class="project-card-footer">
                        <?php if ($language !== ''): ?>
                            <span class="project-language project-language--<?= htmlspecialchars($languageClass); ?>" role="img" aria-label="Lenguaje: <?= htmlspecialchars($language); ?>" title="<?= htmlspecialchars($language); ?>">
                                <?= htmlspecialchars($languageLabel); ?>
                            </span>
                        <?php endif; ?>
                        <a class="project-link" href="<?= htmlspecialchars($projectUrl); ?>" target="_blank" rel="noopener noreferrer" aria-label="Abrir <?= htmlspecialchars($projectName); ?> en GitHub">
                            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M14 3h7v7M10 14 21 3M19 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6" /></svg>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
            <?php if (empty($portfolio['projects'])): ?>
                <p class="projects-empty">No hay proyectos disponibles en este momento.</p>
            <?php endif; ?>
            </div>
        </div>
    </main>

    <footer id="contact">
        <p>© 2026 José González Silva. <a href="<?= htmlspecialchars($portfolio['linkedin']); ?>">LinkedIn</a> | <a href="<?= htmlspecialchars($portfolio['github']); ?>">GitHub</a></p>
    </footer>

    <script>
        document.querySelectorAll('.projects-carousel').forEach(carousel => {
            const track = carousel.querySelector('.projects-track');
            const previousButton = carousel.querySelector('[data-direction="previous"]');
            const nextButton = carousel.querySelector('[data-direction="next"]');

            function updateCarouselControls() {
                const maxScroll = track.scrollWidth - track.clientWidth;
                previousButton.disabled = track.scrollLeft <= 1;
                nextButton.disabled = track.scrollLeft >= maxScroll - 1;
            }

            function scrollCarousel(direction) {
                const card = track.querySelector('.project-card');
                if (!card) return;

                const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
                track.scrollBy({
                    left: direction * (card.getBoundingClientRect().width + gap),
                    behavior: 'smooth'
                });
            }

            previousButton.addEventListener('click', () => scrollCarousel(-1));
            nextButton.addEventListener('click', () => scrollCarousel(1));
            track.addEventListener('scroll', updateCarouselControls, { passive: true });
            window.addEventListener('resize', updateCarouselControls);
            updateCarouselControls();
        });

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