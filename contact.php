<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - José González Silva</title>
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

    <main class="section" style="max-width: 600px;">
        <div class="about-content">
            <h2>Contacto</h2>
            <p>Puedo ponerse en contacto mediante los siguientes medios:</p>
            <ul>
                <li>Email: <a href="mailto:<?php echo htmlspecialchars($portfolio['email']); ?>"><?php echo htmlspecialchars($portfolio['email']); ?></a></li>
                <li>LinkedIn: <a href="<?php echo htmlspecialchars($portfolio['linkedin']); ?>"><?php echo htmlspecialchars($portfolio['linkedin']); ?></a></li>
                <li>GitHub: <a href="<?php echo htmlspecialchars($portfolio['github']); ?>"><?php echo htmlspecialchars($portfolio['github']); ?></a></li>
            </ul>
            <p>Estoy abierto a nuevas oportunidades y colaboraciones.</p>
        </div>
    </main>

    <footer id="contact">
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