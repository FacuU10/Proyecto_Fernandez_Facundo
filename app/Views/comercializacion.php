<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Comercialización</h1>

    <div class="row">
        <div class="col-md-6 mb-4">
            <h2>Detalles de Entrega y Envío</h2>
            <h4>Tipos de Entrega</h4>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">Retiro en nuestro local (previa coordinación).</li>
                <li class="list-group-item">Envío a domicilio en [Tu Ciudad/Zona].</li>
            </ul>

            <h4>Formas de Envío</h4>
            <p>Realizamos envíos los días [Días de envío, ej: Martes y Viernes] en el horario de [Horario de envío, ej: 9:00 a 13:00 hs].</p>
            <p>El costo de envío varía según la zona (Consultar tarifas).</p>
            <p>Para pedidos superiores a [Monto para envío gratis, ej: $5000], el envío es gratuito dentro de [Zona de envío gratis].</p>
        </div>

        <div class="col-md-6 mb-4">
            <h2>Formas de Pago</h2>
            <p>Aceptamos los siguientes métodos de pago:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Efectivo (al retirar o contra entrega).</li>
                <li class="list-group-item">Transferencia Bancaria (solicitar datos).</li>
                <li class="list-group-item">Mercado Pago (tarjetas de crédito/débito, dinero en cuenta).</li>
                <!-- Añade otros si aplica -->
            </ul>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <h2>Información Adicional de Utilidad</h2>
            <ul>
                <li><strong>Conservación:</strong> Recomendamos mantener el pescado refrigerado y consumir dentro de las 48 horas posteriores a la compra, o congelar inmediatamente.</li>
                <li><strong>Pedidos Mínimos:</strong> No hay pedido mínimo para retiro en local. Para envíos a domicilio, el pedido mínimo es de [Monto mínimo, ej: $1500].</li>
                <li><strong>Cómo Pedir:</strong> Puedes realizar tu pedido a través de nuestro WhatsApp [Número de WhatsApp] o por teléfono al [Número de Teléfono].</li>
            </ul>
        </div>
    </div>
<?= $this->endSection() ?>
