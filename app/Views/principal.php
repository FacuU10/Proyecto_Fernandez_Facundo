<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<?= esc($page_title) // Muestra el título pasado desde el controlador ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Presentación de la empresa -->
<div class="container col-xxl-8 px-4 py-3 shadow-lg">
    <div class="row align-items-center g-5 py-5 flex-column-reverse flex-lg-row">

        <!-- Texto de presentación -->
        <div class="col-12 col-lg-6 text-center text-lg-start">
            <h1 class="display-5 fw-bold lh-1 mb-3" style="color: #2cbe34;">
                <strong>Pacú Iberá</strong>, ofrecemos <strong>calidad</strong>
            </h1>
            <p class="lead">
                Nos dedicamos a la piscicultura sustentable, criando pacú con responsabilidad y compromiso
                ambiental.<br>
                Así contribuimos a preservar las especies del río y ofrecemos un producto local, fresco y confiable.<br>
                Contamos con sucursales en toda la provincia de Corrientes, acercando calidad y sabor a tu mesa.
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start gap-3 mt-3">
                <button type="button" class="btn btn-success btn-lg px-4 custom-btn-green"
                    onclick="window.location.href = '<?= site_url(); ?>comercializacion';">Productos</button>
                <button type="button" class="btn btn-outline-success btn-lg px-4 custom-btn-green-outline"
                    onclick="window.location.href = '<?= site_url(); ?>quienes-somos';">+Más</button>
            </div>
        </div>

        <!-- Imagen del logo -->
        <div class="col-12 col-lg-6 text-center">
            <img src="public/assets/img/logo.png" class="img-fluid mx-auto d-block" alt="Logo Pacú Iberá"
                style="max-width: 300px;" loading="lazy">
        </div>

    </div>
</div>

<?= $this->endSection() ?>