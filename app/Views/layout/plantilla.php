<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->renderSection('title', 'Pacú Iberá - Bienvenido') ?></title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('public/assets/bootstrap-5.3.5-dist/bootstrap-5.3.5-dist/css/bootstrap.min.css') ?>"
        rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link href="<?= base_url('public/assets/css/miestilo.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <header>
        <!-- Barra de Navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= site_url('/') ?>">Pacú Iberá</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/') ?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/quienes-somos') ?>">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/comercializacion') ?>">Comercialización</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/contacto') ?>">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/terminos-y-usos') ?>">Términos y Usos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container main-content">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="container footer-custom">
        <?php if (uri_string() != ''): ?>
        <img src="<?= base_url('public/assets/img/logo-transparente.png') ?>" alt="Logo Pacú Iberá" class="footer-logo mb-2">
        <?php endif; ?>
        <p>&copy; <?= date('Y') ?> Pacú Iberá. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="<?= base_url('public/assets/bootstrap-5.3.5-dist/bootstrap-5.3.5-dist/js/bootstrap.bundle.js') ?>">
    </script>
</body>

</html>