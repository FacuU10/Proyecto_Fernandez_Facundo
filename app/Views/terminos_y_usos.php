<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <h1 class="text-center mb-5">Términos y Usos</h1>

            <div class="accordion" id="terminosAccordion">

              
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingUno">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                            Aviso Legal
                        </button>
                    </h2>
                    <div id="collapseUno" class="accordion-collapse collapse show" aria-labelledby="headingUno"
                        data-bs-parent="#terminosAccordion">
                        <div class="accordion-body">
                            <strong>Uso del Sitio Web:</strong> El acceso y uso de este sitio web atribuye la condición
                            de usuario, y acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí
                            reflejadas.
                            El sitio web proporciona acceso a multitud de informaciones, servicios o datos (en adelante,
                            "los contenidos") pertenecientes a Pacú Iberá o a sus licenciantes a los que el usuario
                            pueda tener acceso.
                            <p class="mt-3">El usuario asume la responsabilidad del uso del portal...</p>
                           
                        </div>
                    </div>
                </div>

                <!-- Políticas de Privacidad -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDos">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                            Políticas de Privacidad
                        </button>
                    </h2>
                    <div id="collapseDos" class="accordion-collapse collapse" aria-labelledby="headingDos"
                        data-bs-parent="#terminosAccordion">
                        <div class="accordion-body">
                            <strong>Protección de Datos:</strong> Pacú Iberá cumple con las directrices de la Ley de
                            Protección de Datos Personales y vela por garantizar un correcto uso y tratamiento de los
                            datos personales del usuario.
                            <p class="mt-3">Asimismo, Pacú Iberá informa que da cumplimiento a la Ley...</p>
                          
                        </div>
                    </div>
                </div>

                <!-- Condiciones de Venta -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTres">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                            Condiciones de Venta
                        </button>
                    </h2>
                    <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="headingTres"
                        data-bs-parent="#terminosAccordion">
                        <div class="accordion-body">
                            <strong>Procedimientos de Venta:</strong>
                            <ul class="mt-3">
                                <li><strong>Garantías:</strong> Dada la naturaleza perecedera de nuestros productos
                                    frescos, garantizamos la calidad al momento de la entrega. Cualquier reclamo debe
                                    realizarse dentro de las 48 horas posteriores a la recepción.</li>
                                <li><strong>Soporte Postventa:</strong> Ante cualquier inconveniente, contáctenos a
                                    través de nuestros canales de atención.</li>
                                <li><strong>Formas de Entrega:</strong> Detalladas en la sección <a
                                        href="<?= site_url('/comercializacion') ?>">Comercialización</a>.</li>
                                <li><strong>Tiempos de Entrega:</strong> Los tiempos se coordinarán al confirmar el
                                    pedido.</li>
                                <li><strong>Políticas de Devolución:</strong> No se aceptan devoluciones de productos
                                    frescos salvo defectos de calidad comprobables al momento de recepción.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- fin accordion -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>