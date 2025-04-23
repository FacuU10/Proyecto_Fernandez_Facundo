<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Términos y Usos</h1>

    <div class="accordion" id="terminosAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingUno">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                    Aviso Legal
                </button>
            </h2>
            <div id="collapseUno" class="accordion-collapse collapse show" aria-labelledby="headingUno" data-bs-parent="#terminosAccordion">
                <div class="accordion-body">
                    <strong>Uso del Sitio Web.</strong> El acceso y uso de este sitio web atribuye la condición de usuario, y acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas. El sitio web proporciona el acceso a multitud de informaciones, servicios o datos (en adelante, "los contenidos") en Internet pertenecientes a Pacú Iberá o a sus licenciantes a los que el usuario pueda tener acceso.
                    <p>El usuario asume la responsabilidad del uso del portal...</p>
                    <!-- Completa con el texto legal correspondiente -->
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingDos">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                    Políticas de Privacidad
                </button>
            </h2>
            <div id="collapseDos" class="accordion-collapse collapse" aria-labelledby="headingDos" data-bs-parent="#terminosAccordion">
                <div class="accordion-body">
                    <strong>Protección de Datos.</strong> Pacú Iberá cumple con las directrices de la Ley de Protección de Datos Personales y vela por garantizar un correcto uso y tratamiento de los datos personales del usuario. Para ello, junto a cada formulario de recabo de datos de carácter personal, en los servicios que el usuario pueda solicitar, hará saber al usuario de la existencia y aceptación de las condiciones particulares del tratamiento de sus datos en cada caso...
                    <p>Asimismo, Pacú Iberá informa que da cumplimiento a la Ley...</p>
                    <!-- Completa con tu política de privacidad -->
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTres">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                    Condiciones de Venta
                </button>
            </h2>
            <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="headingTres" data-bs-parent="#terminosAccordion">
                <div class="accordion-body">
                    <strong>Procedimientos de Venta:</strong>
                    <ul>
                        <li><strong>Garantías:</strong> Dada la naturaleza perecedera de nuestros productos frescos, garantizamos la calidad al momento de la entrega. Cualquier reclamo debe realizarse dentro de las [Número] horas posteriores a la recepción del producto.</li>
                        <li><strong>Soporte Postventa:</strong> Ante cualquier duda o inconveniente con su pedido, por favor contáctenos a través de nuestros canales de atención.</li>
                        <li><strong>Formas de Entrega:</strong> Detalladas en la sección <a href="<?= site_url('/comercializacion') ?>">Comercialización</a>.</li>
                        <li><strong>Tiempos de Entrega:</strong> Los tiempos estimados se coordinarán al momento de confirmar el pedido.</li>
                        <li><strong>Políticas de Devolución:</strong> No se aceptan devoluciones de productos frescos una vez entregados y aceptados, salvo defectos de calidad comprobables al momento de la recepción.</li>
                        <!-- Otros puntos relevantes -->
                    </ul>
                    <!-- Completa con las condiciones específicas de tu negocio -->
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
