<?= $this->extend('layout/plantilla') ?>

<?= $this->section('title') ?>
Página en Construcción
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container text-center my-5">
    <h1 class="display-4" style="color: #2cbe34;">¡Página en construcción!</h1>
    <p class="lead">Estamos trabajando para traerte los mejores productos. ¡Pronto estará disponible!</p>
    <img src="<?= base_url('public/assets/img/construccion.png') ?>" alt="Página en construcción"
        class="img-fluid my-4" style="max-width: 400px;">
    <br>
    <a href="<?= site_url(); ?>" class="btn btn-success btn-lg mt-3">Volver al inicio</a>
</div>

<?= $this->endSection() ?>