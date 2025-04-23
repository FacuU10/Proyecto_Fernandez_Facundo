<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Quiénes Somos</h1>

    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Nuestros Objetivos y Trayectoria</h2>
            <p class="lead">En Pacú Iberá, nuestro objetivo principal es llevar a tu mesa pescados frescos de la más alta calidad, directamente desde las aguas del Iberá.</p>
            <p>Somos Pacú Iberá, dedicados a la venta de pescados frescos y de excelente calidad, con especialización en pacú. Contamos con más de 10 años de experiencia en el rubro, promoviendo prácticas sostenibles que respetan el equilibrio del ecosistema del río.</p>
            <p>Con más de 10 años de experiencia, hemos perfeccionado nuestras técnicas de pesca y conservación, siempre respetando el medio ambiente y promoviendo la pesca sostenible. Creemos firmemente en la importancia de mantener el equilibrio ecológico de nuestros ríos.</p>
            <p>Nuestra trayectoria se basa en la confianza de nuestros clientes y en el compromiso con la calidad y la frescura de cada producto que ofrecemos.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>Nuestro Equipo</h2>
            <p>Somos un equipo apasionado por la pesca y la naturaleza, comprometidos con brindarte el mejor servicio.</p>
            <!-- Ejemplo de cómo podrías listar miembros del equipo -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <!-- <img src="<?= base_url('assets/images/foto_miembro1.jpg') ?>" class="card-img-top" alt="Miembro 1"> -->
                        <div class="card-body">
                            <h5 class="card-title">Juan Pérez</h5>
                            <p class="card-text">Encargado de Logística y Pesca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <!-- <img src="..." class="card-img-top" alt="Miembro 2"> -->
                        <div class="card-body">
                            <h5 class="card-title">María Gómez</h5>
                            <p class="card-text">Atención al Cliente y Ventas.</p>
                        </div>
                    </div>
                </div>
                <!-- Añade más miembros si es necesario -->
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
