<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Información de Contacto</h1>

    <div class="row">
        <div class="col-md-6 mb-4">
            <h2>Datos de la Empresa</h2>
            <ul class="list-unstyled">
                <li class="mb-2"><strong>Titular:</strong> [Nombre del Titular]</li>
                <li class="mb-2"><strong>Razón Social:</strong> [Razón Social]</li>
                <li class="mb-2"><strong>Domicilio Legal:</strong> [Domicilio Completo]</li>
                <li class="mb-2"><strong>Teléfono:</strong> <a href="tel:+549...">[Número de Teléfono]</a></li>
                <li class="mb-2"><strong>WhatsApp:</strong> <a href="https://wa.me/549..." target="_blank">[Número de WhatsApp con código país]</a></li>
                <li class="mb-2"><strong>Email:</strong> <a href="mailto:...">[Correo Electrónico]</a></li>
                <!-- Otros medios: Horario de atención, redes sociales, etc. -->
                <li class="mt-3"><strong>Horario de Atención:</strong> [Ej: Lunes a Viernes de 8:00 a 17:00 hs]</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4">
            <h2>Comunícate con Nosotros</h2>
            <p>Utiliza el siguiente formulario para enviarnos tu consulta:</p>

            <!-- Formulario HTML con clases Bootstrap (sin procesamiento PHP por ahora) -->
            <form action="#" method="post"> <!-- action="#" indica que no va a ningún lado aún -->
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
                <div>
                    <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>
