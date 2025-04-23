<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->renderSection('title', 'Pacú Iberá - Bienvenido') ?></title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('public/assets/bootstrap-5.3.5-dist/bootstrap-5.3.5-dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Tu CSS personalizado (opcional, para sobrescribir o añadir estilos) -->
    <link href="<?= base_url('public/assets/css/miestilo.css') ?>" rel="stylesheet">

</head>
<body>

    <header>
        <!-- Barra de Navegación Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> <!-- Ejemplo: navbar azul oscuro -->
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= site_url('/') ?>">Pacú Iberá</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/') ?>">Inicio</a> <!-- Añade clase 'active' dinámicamente si es necesario -->
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

    <main class="container mt-4"> <!-- Usa el contenedor de Bootstrap y añade margen superior -->
        <!-- Aquí se insertará el contenido específico de cada página -->
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="container mt-5 py-3 bg-light text-center"> <!-- Footer con clases Bootstrap -->
        <p>&copy; <?= date('Y') ?> Pacú Iberá. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap Bundle JS (incluye Popper) -->
    <script src="<?= base_url('public/assets/bootstrap-5.3.5-dist/bootstrap-5.3.5-dist/js/bootstrap.bundle.js') ?>"></script>

    <!-- O si tienes Popper y Bootstrap por separado: -->
    <!-- <script src="<?= base_url('assets/popper/popper.min.js') ?>"></script> -->
    <!-- <script src="<?= base_url('public/assets/bootstrap-5.3.5-dist/bootstrap-5.3.5-dist/js/bootstrap.min.js') ?>"></script> -->

    <!-- Tus scripts JS personalizados (si los tienes) -->

</body>
</html>
