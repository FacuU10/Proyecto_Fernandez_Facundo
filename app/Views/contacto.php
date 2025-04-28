<?= $this->extend('layout/plantilla') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <h1 class="text-center mb-5">Información de Contacto</h1>

    <div class="row justify-content-center">
        <div class="col-lg-6 mb-5">
            <div class="card shadow-sm bg-light border-primary">
                <div class="card-body">
                    <h2 class="text-center mb-4">Datos de la Empresa</h2>
                    <ul class="list-unstyled text-center">
                        <li class="mb-3"><strong>Titular:</strong> Wilson Severino</li>
                        <li class="mb-3"><strong>Razón Social:</strong> Pacú Iberá</li>
                        <li class="mb-3"><strong>Domicilio Legal:</strong> Santa Fé 1234, Corrientes Capital</li>
                        <li class="mb-3"><strong>Teléfono:</strong> <a href="tel:+549..."
                                class="text-decoration-none text-primary">*54 234512</a></li>
                        <li class="mb-3"><strong>WhatsApp:</strong> <a href="https://wa.me/549..." target="_blank"
                                class="text-decoration-none text-success">37945667789</a></li>
                        <li class="mb-3"><strong>Email:</strong> <a href="mailto:..."
                                class="text-decoration-none text-primary">wilsonSeverino@gmail.com</a></li>
                        <li class="mt-4"><strong>Horario de Atención:</strong> Lunes a Viernes de 8:00 a 17:00 hs</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5">
            <div class="card shadow-sm bg-light border-primary">
                <div class="card-body">
                    <h2 class="text-center mb-4 ">Comunícate con Nosotros</h2>
                    <p class="text-center">Utiliza el siguiente formulario para enviarnos tu consulta:</p>

                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto:</label>
                            <input type="text" class="form-control" id="asunto" name="asunto">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">Enviar Consulta</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>