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
                Así contribuimos a preservar las especies del río y ofrecemos un <strong>producto local, fresco y confiable.</strong><br>
                Contamos con sucursales en toda la provincia de Corrientes, acercando calidad y sabor a tu mesa.
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start gap-3 mt-3">
                <button type="button" class="btn btn-success btn-lg px-4 custom-btn-green"
                    onclick="window.location.href = '<?= site_url(); ?>comercializacion';">Productos</button>
                <button type="button" class="btn btn-outline-success btn-lg px-4 custom-btn-green-outline"
                    onclick="window.location.href = '<?= site_url(); ?>quienes-somos';">Conocenos Más</button>
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

        <!-- Tarjeta 1: Origen Controlado -->
        <div class="col">
            <div class="card h-100 border-3" style="border-color: #2cbe34; background-color: #ffffff; color: #000000;">
                <img src="<?= base_url('public/assets/img/foto1.jpg') ?>" class="card-img-top" alt="Alevines de Pacú">
                <div class="card-body">
                    <h5 class="card-title fw-bold" style="color: #1a7d20;">Calidad Controlada desde el Origen</h5>
                    <p class="card-text">
                        Criamos nuestros pacúes desde alevines en un ambiente óptimo. Este cuidado temprano asegura un
                        producto final saludable, trazable y de confianza.
                    </p>
                </div>
                <div class="card-footer" style="background-color: #ffffff; border-top: none;">
                    <!-- Puedes dejar el footer vacío o añadir un pequeño detalle si lo deseas -->
                </div>
            </div>
        </div>

        <!-- Tarjeta 2: Nutrición Superior -->
        <div class="col">
            <div class="card h-100 border-3" style="border-color: #2cbe34; background-color: #ffffff; color: #000000;">
                <img src="<?= base_url('public/assets/img/foto2.jpg') ?>" class="card-img-top"
                    alt="Alimentación de Pacú">
                <div class="card-body">
                    <h5 class="card-title fw-bold" style="color: #1a7d20;">Nutrición Óptima para un Sabor Superior</h5>
                    <p class="card-text">
                        Utilizamos alimento balanceado de primera calidad para un crecimiento saludable. El resultado:
                        un pacú más nutritivo y con un sabor excepcional en tu mesa.
                    </p>
                </div>
                <div class="card-footer" style="background-color: #ffffff; border-top: none;">
                    <!-- Footer -->
                </div>
            </div>
        </div>

        <!-- Tarjeta 3: Procesamiento Experto -->
        <div class="col">
            <div class="card h-100 border-3" style="border-color: #2cbe34; background-color: #ffffff; color: #000000;">
                <img src="<?= base_url('public/assets/img/foto3.jpg') ?>" class="card-img-top"
                    alt="Filet de Pacú Desespinado">
                <div class="card-body">
                    <h5 class="card-title fw-bold" style="color: #1a7d20;">Procesado con Precisión y Cuidado</h5>
                    <p class="card-text">
                        Aplicamos rigurosos estándares de higiene en nuestro frigorífico. Disfruta de cortes prácticos y
                        deliciosos, como el filet despinado, garantizando frescura y calidad.
                    </p>
                </div>
                <div class="card-footer" style="background-color: #ffffff; border-top: none;">
                    <!-- Footer -->
                </div>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection() ?>