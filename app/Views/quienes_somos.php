<?= $this->extend('layout/plantilla') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-4">
    <h1 class="mb-5 text-center" style="color: #2cbe34;">Quienes Somos</h1>

    <div class="row mb-5">
        <div class="col-md-10 offset-md-1">
            <h2>Nuestros Objetivos y Trayectoria</h2>
            <p class="lead">En <strong>Pacú Iberá</strong>, nuestro objetivo principal es llevar a tu mesa pescados
                frescos de la más alta calidad, directamente desde las aguas del Iberá.</p>
            <p>Con más de 10 años de experiencia, perfeccionamos nuestras prácticas combinando tecnología e innovación
                con saberes tradicionales. No sólo criamos pacú, también <strong>preservamos el hábitat
                    natural</strong>, evitando la sobreexplotación de nuestros ríos.</p>
            <p>Nuestra trayectoria se basa en la confianza de nuestros clientes y en nuestro compromiso con la calidad y
                la frescura de cada producto que ofrecemos.</p>
            <p>También destacamos los múltiples beneficios que aporta esta carne a la dieta, como proteínas de alto
                valor biológico, es decir, que <strong>  contiene todos los aminoácidos esenciales que el cuerpo no puede producir
                por sí solo.</strong>  Tambien aporta minerales como el hierro, potasio o fósforo, y vitaminas como la D o
                algunas del complejo B. Además, su contenido graso es moderado,<strong>  con presencia de Omega 3 y predominio de
                grasas saludables "saturadas"</strong> , lo que la convierte en una alternativa ideal para quienes buscan una
                dieta más consciente y nutritiva.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-10 offset-md-1 text-center">

            <div id="carouselPacu" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 600px;">
                <div class="carousel-inner rounded shadow">

                    <div class="carousel-item active">
                        <img src="<?= base_url('public/assets/img/pacu.jpg') ?>" class="d-block w-100 rounded"
                            alt="Pacú fresco">
                    </div>

                    <div class="carousel-item">
                        <img src="<?= base_url('public/assets/img/pacu2.jpg') ?>" class="d-block w-100 rounded"
                            alt="Pacú cocinado">
                    </div>

                    <div class="carousel-item">
                        <img src="<?= base_url('public/assets/img/pacu3.jpg') ?>" class="d-block w-100 rounded"
                            alt="Preparaciones de Pacú">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPacu" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPacu" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>


    <div class="row mb-5">
        <div class="col-md-10 offset-md-1">
            <h2>Nuestro Equipo</h2>
            <p class="mb-4">Somos un equipo apasionado por la pesca y la naturaleza, comprometidos con brindarte el
                mejor servicio en cada etapa del proceso.</p>

            <div class="row g-4">
                <!-- Miembro 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow h-100" style="border-left: 4px solid #2cbe34;">
                        <img src="<?= base_url('public/assets/img/foto_miembro1.jpg') ?>" class="card-img-top"
                            alt="María Gómez">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #2cbe34;">María Gómez</h5>
                            <p class="card-text"><i class="bi bi-truck me-2"></i>Logística</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow h-100" style="border-left: 4px solid #2cbe34;">
                        <img src="<?= base_url('public/assets/img/foto_miembro2.jpg') ?>" class="card-img-top"
                            alt="Juan Pérez">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #2cbe34;">Juan Pérez</h5>
                            <p class="card-text"><i class="bi bi-telephone me-2"></i>Atención al Cliente</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow h-100" style="border-left: 4px solid #2cbe34;">
                        <img src="<?= base_url('public/assets/img/foto_miembro3.jpg') ?>" class="card-img-top"
                            alt="Lucía Ríos">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #2cbe34;">Lucía Ríos</h5>
                            <p class="card-text"><i class="bi bi-cart-check me-2"></i>Supervisora de Locales</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow h-100" style="border-left: 4px solid #2cbe34;">
                        <img src="<?= base_url('public/assets/img/foto_miembro4.jpg') ?>" class="card-img-top"
                            alt="Carlos Benítez">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #2cbe34;">Carlos Benítez</h5>
                            <p class="card-text"><i class="bi bi-clipboard-check me-2"></i>Control de Calidad</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow h-100" style="border-left: 4px solid #2cbe34;">
                        <img src="<?= base_url('public/assets/img/foto_miembro5.jpg') ?>" class="card-img-top"
                            alt="Valeria Acosta">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #2cbe34;">Valeria Acosta</h5>
                            <p class="card-text"><i class="bi bi-megaphone me-2"></i>Comunicación y Marketing</p>
                        </div>
                    </div>
                </div>
                <!-- Miembro 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow h-100" style="border-left: 4px solid #2cbe34;">
                        <img src="<?= base_url('public/assets/img/foto_miembro6.jpg') ?>" class="card-img-top"
                            alt="Esteban Morales">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #2cbe34;">Esteban Morales</h5>
                            <p class="card-text"><i class="bi bi-gear me-2"></i>Mantenimiento y Equipamiento</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>