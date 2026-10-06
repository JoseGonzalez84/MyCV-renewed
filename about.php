<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de - José González Silva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">José González Silva</div>
            <ul>
                <li><a href="index.php">Portfolio</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#experience">Experiencia</a></li>
                <li><a href="#projects">Proyectos</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="section">
        <div class="about-container">
            <img src="profile.jpg" alt="Foto de perfil" class="about-photo">
            <h2 class="about-title">Sobre mí</h2>
            <p><?php echo htmlspecialchars($portfolio['bio']); ?></p>
            <p>Backend Developer con experiencia en desarrollo de sistemas en la nube, APIs y arquitecturas micro-servicios. Apasionado por PHP, SQL y buenas prácticas de desarrollo.</p>
            <div class="skills-section">
                <h3>Stack Tecnológico</h3>
                <div class="skills-grid">
                    <?php foreach ($portfolio['skills'] as $category => $technologies): ?>
                    <div class="skill-category">
                        <strong><?php echo htmlspecialchars($category); ?></strong>
                        <ul>
                            <?php foreach ($technologies as $tech): ?>
                            <li><?php echo htmlspecialchars($tech); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </footer>
    <footer>
        <p>© 2024 José González Silva. <a href="<?php echo htmlspecialchars($portfolio['linkedin']); ?>">LinkedIn</a> | <a href="<?php echo htmlspecialchars($portfolio['github']); ?>">GitHub</a></p>
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