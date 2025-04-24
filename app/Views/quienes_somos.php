<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container py-4">
        <h1 class="mb-5 text-center">Quiénes Somos</h1>

        <div class="row mb-5">
            <div class="col-md-10 offset-md-1">
                <h2 class="text-primary mb-4">Nuestros Objetivos y Trayectoria</h2>
                <p class="lead">En <strong>Pacú Iberá</strong>, nuestro objetivo principal es llevar a tu mesa pescados frescos de la más alta calidad, directamente desde las aguas del Iberá.</p>
                <p>Con más de 10 años de experiencia, perfeccionamos nuestras prácticas combinando tecnología e innovación con saberes tradicionales. No solo criamos pacú: también <strong>preservamos el hábitat natural</strong>, evitando la sobreexplotación de nuestros ríos.</p>
                <p>Nuestra trayectoria se basa en la confianza de nuestros clientes y en nuestro compromiso con la calidad y la frescura de cada producto que ofrecemos.</p>
                <p>Tambien hacemos enfasis en los multiples beneficios que aporta consumir carne de pescado, como el pacú, que aporta <strong>proteínas de alta calidad, omega-3 y bajo contenido graso</strong>, ideal para una alimentación saludable y consciente.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-10 offset-md-1">
                <h2 class="text-primary mb-4">Nuestro Equipo</h2>
                <p class="mb-4">Somos un equipo apasionado por la pesca y la naturaleza, comprometidos con brindarte el mejor servicio en cada etapa del proceso.</p>

                <div class="row g-4">
                    <!-- Miembro 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow h-100">
                            <img src="<?= base_url('public/assets/img/foto_miembro1.jpg') ?>" class="card-img-top" alt="María Gómez">
                            <div class="card-body">
                                <h5 class="card-title">María Gómez</h5>
                                <p class="card-text"><i class="bi bi-truck me-2"></i>Logística</p>
                            </div>
                        </div>
                    </div>
                    <!-- Miembro 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow h-100">
                            <img src="<?= base_url('public/assets/img/foto_miembro2.jpg') ?>" class="card-img-top" alt="Juan Pérez">
                            <div class="card-body">
                                <h5 class="card-title">Juan Pérez</h5>
                                <p class="card-text"><i class="bi bi-telephone me-2"></i>Atención al Cliente</p>
                            </div>
                        </div>
                    </div>
                    <!-- Miembro 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow h-100">
                            <img src="<?= base_url('public/assets/img/foto_miembro3.jpg') ?>" class="card-img-top" alt="Lucía Ríos">
                            <div class="card-body">
                                <h5 class="card-title">Lucía Ríos</h5>
                                <p class="card-text"><i class="bi bi-cart-check me-2"></i>Supervisora de Locales</p>
                            </div>
                        </div>
                    </div>
                    <!-- Miembro 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow h-100">
                            <img src="<?= base_url('public/assets/img/foto_miembro4.jpg') ?>" class="card-img-top" alt="Carlos Benítez">
                            <div class="card-body">
                                <h5 class="card-title">Carlos Benítez</h5>
                                <p class="card-text"><i class="bi bi-clipboard-check me-2"></i>Control de Calidad</p>
                            </div>
                        </div>
                    </div>
                    <!-- Miembro 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow h-100">
                            <img src="<?= base_url('public/assets/img/foto_miembro5.jpg') ?>" class="card-img-top" alt="Valeria Acosta">
                            <div class="card-body">
                                <h5 class="card-title">Valeria Acosta</h5>
                                <p class="card-text"><i class="bi bi-megaphone me-2"></i>Comunicación y Marketing</p>
                            </div>
                        </div>
                    </div>
                    <!-- Miembro 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow h-100">
                            <img src="<?= base_url('public/assets/img/foto_miembro6.jpg') ?>" class="card-img-top" alt="Esteban Morales">
                            <div class="card-body">
                                <h5 class="card-title">Esteban Morales</h5>
                                <p class="card-text"><i class="bi bi-gear me-2"></i>Mantenimiento y Equipamiento</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?= $this->endSection() ?>
