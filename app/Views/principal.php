<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<?= esc($page_title) // Muestra el título pasado desde el controlador ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Presentación de la empresa -->
<div class="container col-xxl-8 px-4 py-3 shadow-lg">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 ">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="public\assets\img\logo.png" class="d-block mx-lg-auto img-fluid" alt="Imagen1" width="700" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><strong>Pacú Iberá</strong>, el sabor del Paraná</h1>
        <p class="lead">Pescamos con conciencia para que disfrutes un producto local, fresco y confiable.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" onclick="window.location.href = '<?= site_url(); ?>comercializacion';"">Productos</button>
        <button type="button" class="btn btn-info btn-lg px-4 me-md-2" onclick="window.location.href = '<?= site_url(); ?>quienes-somos';"">+Más</button>
        </div>
      </div>
    </div>
  </div>

  

<?= $this->endSection() ?>