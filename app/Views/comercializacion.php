<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="text-center mb-5">
    <h1 class="mb-4">Comercialización</h1>
    <p class="lead">Conocé cómo recibir tus productos, los medios de pago disponibles y toda la información útil para
        facilitar tu compra.</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-5 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h3 class="card-title text-primary">Entrega y Envío</h3>

                <h5 class="mt-4">Tipos de Entrega</h5>
                <ul class="list-unstyled">
                    <li><strong>Retiro en nuestros locales:</strong></li>
                    <li>- Corrientes Capital (Lavalle 1223)</li>
                    <li>- San Miguel, Ctes (Sarmiento 3421)</li>
                    <li>- Paso de los Libres, Ctes (Colón 1025)</li>
                    <li class="mt-2"><strong>Envío a domicilio:</strong> comprando online o por WhatsApp.</li>
                </ul>

                <h5 class="mt-4">Formas de Envío</h5>
                <ul class="list-unstyled">
                    <li>- Envíos de Lunes a Viernes, de 9:00 a 13:00 hs.</li>
                    <li>- Costo variable según zona (consultar).</li>
                    <li>- Envío gratuito en zonas a menos de 5 km por compras superiores a $12.000.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-5 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h3 class="card-title text-primary">Formas de Pago</h3>
                <p class="mt-3">Aceptamos múltiples métodos de pago para tu comodidad:</p>
                <ul class="list-unstyled">
                    <li>- Efectivo (al retirar o contra entrega).</li>
                    <li>- Transferencia bancaria (solicitá nuestros datos).</li>
                    <li>- Mercado Pago (tarjetas, dinero en cuenta, QR).</li>
                    <!-- Agregá otros medios si corresponde -->
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-md-10">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-primary text-center">Información Útil</h3>
                <ul class="mt-3">
                    <li><strong>Conservación:</strong> Mantené refrigerado el pescado y consumilo dentro de las 48
                        horas, o congelalo inmediatamente.</li>
                    <li><strong>Pedidos Mínimos:</strong> No hay mínimo para retiro en local. Para envío a domicilio, el
                        mínimo es de <strong>$8.000</strong>.</li>
                    <li>
                        <strong>Cómo Pedir:</strong> Podés hacerlo por WhatsApp al <strong>37943456789</strong>
                        o a través de nuestro
                        <a href="https://www.instagram.com/pacuibera_pescaderia/" target="_blank">
                            <i class="bi bi-instagram"></i> <strong>Instagram</strong>
                        </a>.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>