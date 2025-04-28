<?= $this->extend('layout/plantilla') ?>

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

<div class="container mt-5">
    <!-- Agrega un margen superior general -->
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <!-- Tarjeta 1 -->
        <div class="col">
            <div class="card h-100 border-3" style="border-color: #2cbe34; background-color: #ffffff; color: #000000;">
                <img src="<?= base_url('public/assets/img/foto1.jpg') ?>" class="card-img-top" alt="Imagen 1">
                <div class="card-body">
                    <h5 class="card-title">Desde alevines a tu mesa</h5>
                    <p class="card-text">En nuestro centro comenzamos el trabajo desde las primeras etapas de vida de
                        los peces. Criamos alevines(crias de pez) de pacú, proporcionándoles un ambiente controlado y
                        seguro que
                        favorece su desarrollo. Les brindamos una alimentación adecuada según su tamaño y necesidades,
                        asegurando su crecimiento saludable. Cada etapa del cuidado es fundamental .</p>
                </div>
                <div class="card-footer" style="background-color: #ffffff;">

                </div>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="col">
            <div class="card h-100 border-3" style="border-color: #2cbe34; background-color: #ffffff; color: #000000;">
                <img src="<?= base_url('public/assets/img/foto2.jpg') ?>" class="card-img-top" alt="Imagen 2">
                <div class="card-body">
                    <h5 class="card-title">Nutrición balanceada para un desarrollo óptimo</h5>
                    <p class="card-text">Utilizamos alimentos balanceados de alta calidad que aseguran un
                        crecimiento sano. Una correcta nutrición es clave
                        para obtener ejemplares fuertes.</p>
                </div>
                <div class="card-footer" style="background-color: #ffffff;">

                </div>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="col">
            <div class="card h-100 border-3" style="border-color: #2cbe34; background-color: #ffffff; color: #000000;">
                <img src="<?= base_url('public/assets/img/foto3.jpg') ?>" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                    <h5 class="card-title">Proceso de elaboración en nuestro frigorífico</h5>
                    <p class="card-text">En nuestro frigorífico, procesamos los pacúes cuidadosamente para garantizar
                        productos de alta calidad. Según el tamaño del ejemplar, elaboramos diferentes cortes, como el
                        filet despespinado que se observa en la imagen. Cada pieza es trabajada de forma higiénica y
                        precisa para ofrecer al consumidor un producto sano, nutritivo y listo para su consumo.</p>
                </div>
                <div class="card-footer" style="background-color: #ffffff;">

                </div>
            </div>
        </div>

    </div>
</div>


<!-- Carrusel de imágenes 
<div id="carouselPacus" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="<?= base_url('public/assets/img/foto1.jpg') ?>" class="d-block w-100" alt="Imagen 1"
                style="max-height: 400px; object-fit: cover;">
        </div>

        <div class="carousel-item">
            <img src="<?= base_url('public/assets/img/foto2.jpg') ?>" class="d-block w-100" alt="Imagen 2"
                style="max-height: 400px; object-fit: cover;">
        </div>

        <div class="carousel-item">
            <img src="<?= base_url('public/assets/img/foto3.jpg') ?>" class="d-block w-100" alt="Imagen 3"
                style="max-height: 400px; object-fit: cover;">
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPacus" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPacus" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselPacus" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Imagen 1"></button>
        <button type="button" data-bs-target="#carouselPacus" data-bs-slide-to="1" aria-label="Imagen 2"></button>
        <button type="button" data-bs-target="#carouselPacus" data-bs-slide-to="2" aria-label="Imagen 3"></button>
    </div>
</div>
-->

<?= $this->endSection() ?>