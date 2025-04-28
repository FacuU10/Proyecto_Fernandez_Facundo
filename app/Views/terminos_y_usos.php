<?= $this->extend('layout/plantilla') ?>

<?= $this->section('title') ?><?= esc($page_title) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-4">  <!-- Agregado container y margen para mejor espaciado -->
    <h1 class="mb-4 text-center" style="color: #2cbe34;">Términos y Usos</h1> <!-- Centrado y con color -->

    <div class="accordion shadow-sm" id="terminosAccordion"> <!-- Sombra suave al acordeón -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingUno">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                    Aviso Legal
                </button>
            </h2>
            <div id="collapseUno" class="accordion-collapse collapse" aria-labelledby="headingUno" data-bs-parent="#terminosAccordion">
                <div class="accordion-body">
                    <p><strong>1. Datos Identificativos:</strong> En cumplimiento con el deber de información recogido en la legislación aplicable, a continuación se reflejan los siguientes datos: la empresa titular de dominio web es <strong>Pacú Iberá</strong> (en adelante Pacú Iberá), con domicilio a estos efectos en <strong>Santa Fé 1234, Corrientes Capital</strong> número de C.U.I.T.: 20-27456789-4 inscrita en el AFIP. Correo electrónico de contacto: <strong><a href="mailto:wilsonSeverino@gmail.com">wilsonSeverino@gmail.com</a></strong> del sitio web.</p>

                    <p><strong>2. Usuarios:</strong> El acceso y/o uso de este portal de Pacú Iberá atribuye la condición de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas. Las citadas Condiciones serán de aplicación independientemente de las Condiciones Generales de Contratación que en su caso resulten de obligado cumplimiento.</p>

                    <p><strong>3. Uso del Portal:</strong> <?= site_url() ?> proporciona el acceso a multitud de informaciones, servicios, programas o datos (en adelante, "los contenidos") en Internet pertenecientes a Pacú Iberá o a sus licenciantes a los que el USUARIO pueda tener acceso. El USUARIO asume la responsabilidad del uso del portal. Dicha responsabilidad se extiende al registro que fuese necesario para acceder a determinados servicios o contenidos. En dicho registro el USUARIO será responsable de aportar información veraz y lícita. Como consecuencia de este registro, al USUARIO se le puede proporcionar una contraseña de la que será responsable, comprometiéndose a hacer un uso diligente y confidencial de la misma.</p>
                    <p>El USUARIO se compromete a hacer un uso adecuado de los contenidos y servicios (como por ejemplo servicios de chat, foros de discusión o grupos de noticias si los hubiere) que Pacú Iberá ofrece a través de su portal y con carácter enunciativo pero no limitativo, a no emplearlos para (i) incurrir en actividades ilícitas, ilegales o contrarias a la buena fe y al orden público; (ii) difundir contenidos o propaganda de carácter racista, xenófobo, pornográfico-ilegal, de apología del terrorismo o atentatorio contra los derechos humanos; (iii) provocar daños en los sistemas físicos y lógicos de Pacú Iberá, de sus proveedores o de terceras personas, introducir o difundir en la red virus informáticos o cualesquiera otros sistemas físicos o lógicos que sean susceptibles de provocar los daños anteriormente mencionados; (iv) intentar acceder y, en su caso, utilizar las cuentas de correo electrónico de otros usuarios y modificar o manipular sus mensajes. Pacú Iberá se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren el respeto a la dignidad de la persona, que sean discriminatorios, xenófobos, racistas, pornográficos, que atenten contra la juventud o la infancia, el orden o la seguridad pública o que, a su juicio, no resultaran adecuados para su publicación.</p>
                    <p>En cualquier caso, Pacú Iberá no será responsable de las opiniones vertidas por los usuarios a través de los foros, chats, u otras herramientas de participación que pudieran habilitarse.</p>

                    <p><strong>4. Propiedad Intelectual e Industrial:</strong> Pacú Iberá por sí o como cesionaria, es titular de todos los derechos de propiedad intelectual e industrial de su página web, así como de los elementos contenidos en la misma (a título enunciativo, imágenes, sonido, audio, vídeo, software o textos; marcas o logotipos, combinaciones de colores, estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, etc.), titularidad de Pacú Iberá o bien de sus licenciantes. Todos los derechos reservados. En virtud de lo dispuesto en la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin la autorización de Pacú Iberá. El USUARIO se compromete a respetar los derechos de Propiedad Intelectual e Industrial titularidad de Pacú Iberá. Podrá visualizar los elementos del portal e incluso imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, única y exclusivamente, para su uso personal y privado.</p>

                    <p><strong>5. Exclusión de Garantías y Responsabilidad:</strong> Pacú Iberá no se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieran ocasionar, a título enunciativo: errores u omisiones en los contenidos, falta de disponibilidad del portal o la transmisión de virus o programas maliciosos o lesivos en los contenidos, a pesar de haber adoptado todas las medidas tecnológicas necesarias para evitarlo.</p>

                    <p><strong>6. Modificaciones:</strong> Pacú Iberá se reserva el derecho de efectuar sin previo aviso las modificaciones que considere oportunas en su portal, pudiendo cambiar, suprimir o añadir tanto los contenidos y servicios que se presten a través de la misma como la forma en la que éstos aparezcan presentados o localizados en su portal.</p>

                    <p><strong>7. Enlaces:</strong> En el caso de que en <?= site_url() ?> se dispusiesen enlaces o hipervínculos hacía otros sitios de Internet, Pacú Iberá no ejercerá ningún tipo de control sobre dichos sitios y contenidos. En ningún caso Pacú Iberá asumirá responsabilidad alguna por los contenidos de algún enlace perteneciente a un sitio web ajeno, ni garantizará la disponibilidad técnica, calidad, fiabilidad, exactitud, amplitud, veracidad, validez y constitucionalidad de cualquier material o información contenida en ninguno de dichos hipervínculos u otros sitios de Internet. Igualmente la inclusión de estas conexiones externas no implicará ningún tipo de asociación, fusión o participación con las entidades conectadas.</p>

                    <p><strong>8. Derecho de Exclusión:</strong> Pacú Iberá se reserva el derecho a denegar o retirar el acceso al portal y/o los servicios ofrecidos sin necesidad de preaviso, a instancia propia o de un tercero, a aquellos usuarios que incumplan las presentes Condiciones Generales de Uso.</p>

                    <p><strong>9. Generalidades:</strong> Pacú Iberá perseguirá el incumplimiento de las presentes condiciones así como cualquier utilización indebida de su portal ejerciendo todas las acciones civiles y penales que le puedan corresponder en derecho.</p>

                    <p><strong>10. Modificación de las Presentes Condiciones y Duración:</strong> Pacú Iberá podrá modificar en cualquier momento las condiciones aquí determinadas, siendo debidamente publicadas como aquí aparecen. La vigencia de las citadas condiciones irá en función de su exposición y estarán vigentes hasta que sean modificadas por otras debidamente publicadas.</p>

                    <p><strong>11. Legislación Aplicable y Jurisdicción:</strong> La relación entre Pacú Iberá y el USUARIO se regirá por la normativa argentina vigente y cualquier controversia se someterá a los Juzgados y tribunales de la ciudad de <strong>Corrientes Capital</strong>, Argentina.</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingDos">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                    Políticas de Privacidad
                </button>
            </h2>
            <div id="collapseDos" class="accordion-collapse collapse" aria-labelledby="headingDos" data-bs-parent="#terminosAccordion">
                <div class="accordion-body">
                    <p><strong>1. Responsable del Tratamiento:</strong> Pacú Iberá, con domicilio en <strong>Santa Fé 1234, Corrientes Capital</strong> y CUIT 20-27456789-4, es el responsable del tratamiento de los datos personales recabados a través de este sitio web. Correo electrónico de contacto: <strong><a href="mailto:wilsonSeverino@gmail.com">wilsonSeverino@gmail.com</a></strong>.</p>

                    <p><strong>2. Finalidad del Tratamiento:</strong> Los datos personales que nos proporciones (nombre, email, teléfono, dirección, etc.) serán tratados con las siguientes finalidades:</p>
                    <ul>
                        <li>Gestionar tu registro como usuario del sitio web.</li>
                        <li>Gestionar la contratación de productos que realices a través del sitio web, incluyendo la gestión del pago y el envío.</li>
                        <li>Atender tus consultas, solicitudes o peticiones realizadas a través de los canales de atención al cliente (formulario de contacto, email, teléfono, WhatsApp).</li>
                        <li>Enviarte comunicaciones comerciales sobre nuestros productos, servicios, novedades, promociones y eventos, siempre que contemos con tu consentimiento explícito para ello. Podrás revocar este consentimiento en cualquier momento.</li>
                        <li>Realizar análisis estadísticos y estudios de mercado para mejorar nuestros productos y servicios.</li>
                        <li>Cumplir con las obligaciones legales que nos sean aplicables.</li>
                    </ul>

                    <p><strong>3. Legitimación:</strong> La base legal para el tratamiento de tus datos varía según la finalidad:</p>
                    <ul>
                        <li>La ejecución de un contrato (para la gestión de compras y envíos).</li>
                        <li>El consentimiento del interesado (para el envío de comunicaciones comerciales y, en algunos casos, para atender consultas específicas).</li>
                        <li>El interés legítimo de Pacú Iberá (para análisis estadísticos y mejora de servicios).</li>
                        <li>El cumplimiento de obligaciones legales.</li>
                    </ul>

                    <p><strong>4. Conservación de los Datos:</strong> Tus datos personales serán conservados durante el tiempo estrictamente necesario para cumplir con las finalidades para las que fueron recabados, así como para determinar las posibles responsabilidades que se pudieran derivar de dichas finalidades y del tratamiento de los datos. En el caso de las comunicaciones comerciales, conservaremos tus datos mientras no solicites su supresión.</p>

                    <p><strong>5. Destinatarios de los Datos:</strong> Tus datos podrán ser comunicados a:</p>
                    <ul>
                        <li>Empresas de transporte para gestionar el envío de los pedidos.</li>
                        <li>Entidades financieras para la gestión de cobros y pagos.</li>
                        <li>Proveedores de servicios tecnológicos (hosting, email marketing, etc.) que actúan como encargados del tratamiento.</li>
                        <li>Administraciones Públicas competentes, en los casos previstos por la Ley.</li>
                    </ul>
                    <p>No realizaremos transferencias internacionales de tus datos personales fuera de Argentina sin las garantías adecuadas.</p>

                    <p><strong>6. Derechos del Interesado:</strong> Como titular de los datos, tienes derecho a:</p>
                    <ul>
                        <li>Acceder a tus datos personales.</li>
                        <li>Solicitar la rectificación de los datos inexactos.</li>
                        <li>Solicitar la supresión de tus datos, cuando, entre otros motivos, los datos ya no sean necesarios para los fines que fueron recogidos.</li>
                        <li>Solicitar la limitación del tratamiento de tus datos.</li>
                        <li>Oponerte al tratamiento de tus datos.</li>
                        <li>Solicitar la portabilidad de tus datos.</li>
                        <li>Retirar el consentimiento prestado en cualquier momento.</li>
                    </ul>
                    <p>Puedes ejercer estos derechos enviando una solicitud por escrito a nuestra dirección postal <strong>Santa Fé 1234, Corrientes Capital</strong> o a través del correo electrónico <strong><a href="mailto:wilsonSeverino@gmail.com">wilsonSeverino@gmail.com</a></strong>, adjuntando una copia de tu DNI o documento equivalente para acreditar tu identidad.</p>
                    <p>Si consideras que tus derechos no han sido debidamente atendidos, tienes derecho a presentar una reclamación ante la Agencia de Acceso a la Información Pública (AAIP) de Argentina.</p>

                    <p><strong>7. Medidas de Seguridad:</strong> Pacú Iberá ha adoptado las medidas de índole técnica y organizativa necesarias para garantizar la seguridad de los datos de carácter personal y evitar su alteración, pérdida, tratamiento o acceso no autorizado, habida cuenta del estado de la tecnología, la naturaleza de los datos almacenados y los riesgos a que están expuestos.</p>

                    <p><strong>8. Cambios en la Política de Privacidad:</strong> Pacú Iberá se reserva el derecho a modificar la presente política para adaptarla a novedades legislativas o jurisprudenciales así como a prácticas de la industria. En dichos supuestos, anunciaremos en esta página los cambios introducidos con razonable antelación a su puesta en práctica.</p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTres">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                    Condiciones de Venta
                </button>
            </h2>
            <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="headingTres" data-bs-parent="#terminosAccordion">
                <div class="accordion-body">
                    <p><strong>1. Ámbito de Aplicación:</strong> Las presentes Condiciones Generales de Venta se aplican a todas las ventas de productos realizadas por Pacú Iberá a través de su sitio web, por teléfono, WhatsApp, redes sociales o en sus locales físicos. La realización de un pedido implica la aceptación sin reservas por parte del cliente de estas condiciones.</p>

                    <p><strong>2. Productos y Precios:</strong></p>
                    <ul>
                        <li>Los productos ofertados son principalmente pescados frescos (Pacú) y derivados, sujetos a disponibilidad según temporada y captura/cría. Las imágenes de los productos son orientativas.</li>
                        <li>Los precios indicados en el sitio web o comunicados por otros canales incluyen los impuestos aplicables (IVA), salvo indicación expresa en contrario.</li>
                        <li>Los precios no incluyen los gastos de envío, que se calcularán e informarán al cliente antes de finalizar la compra, salvo promociones específicas.</li>
                        <li>Pacú Iberá se reserva el derecho de modificar los precios en cualquier momento, pero los productos se facturarán sobre la base de las tarifas en vigor en el momento del registro del pedido.</li>
                    </ul>

                    <p><strong>3. Pedidos:</strong></p>
                    <ul>
                        <li>Los pedidos pueden realizarse a través de los canales habilitados: sitio web (si aplica), WhatsApp (<a href="https://wa.me/54937945667789" target="_blank">37945667789</a>), teléfono (<a href="tel:+54234512">*54 234512</a>), redes sociales o directamente en nuestros locales.</li>
                        <li>Para pedidos online o a distancia, el cliente recibirá una confirmación del pedido por el medio correspondiente (email, WhatsApp, etc.).</li>
                        <li>Existe un importe mínimo de compra de <strong>$8.000</strong> (o el importe que definas) para los pedidos con envío a domicilio. No hay mínimo para retiro en local.</li>
                        <li>Pacú Iberá se reserva el derecho de cancelar cualquier pedido si existen motivos razonables (falta de stock, imposibilidad de realizar el envío, sospecha de fraude, etc.), informando al cliente.</li>
                    </ul>

                    <p><strong>4. Formas de Pago:</strong></p>
                    <ul>
                        <li>Las formas de pago aceptadas son: Efectivo (al retirar en local o contra entrega en envíos), Transferencia Bancaria (los datos se proporcionarán al confirmar el pedido), Mercado Pago (tarjeta de crédito/débito, dinero en cuenta, QR).</li>
                        <li>En caso de pago por transferencia, el pedido no se considerará confirmado hasta la recepción del comprobante o la acreditación del pago.</li>
                    </ul>

                    <p><strong>5. Entrega y Envío:</strong></p>
                    <ul>
                        <li><strong>Retiro en Local:</strong> El cliente puede retirar su pedido sin costo adicional en nuestras sucursales habilitadas durante el horario de atención (Lunes a Viernes de 8:00 a 17:00 hs).</li>
                        <li><strong>Envío a Domicilio:</strong>
                            <ul>
                                <li>Los envíos se realizan de Lunes a Viernes en la franja horaria de 9:00 a 13:00 hs (o la que definas).</li>
                                <li>El costo de envío varía según la zona de entrega y será comunicado al cliente antes de confirmar el pedido. Consultar tarifas vigentes.</li>
                                <li>El envío es gratuito para compras superiores a $12.000 (o el importe que definas) dentro de un radio de 5 km desde nuestras sucursales (o las condiciones que apliquen).</li>
                                <li>Es responsabilidad del cliente proporcionar una dirección de entrega correcta y completa, y asegurarse de que haya alguien disponible para recibir el pedido en la franja horaria acordada. Pacú Iberá no se responsabiliza por demoras o imposibilidad de entrega debidas a información incorrecta o ausencia del destinatario.</li>
                                <li>Los tiempos de entrega son estimados y pueden variar por factores externos (tráfico, clima, etc.).</li>
                            </ul>
                        </li>
                    </ul>

                    <p><strong>6. Garantías y Calidad:</strong></p>
                    <ul>
                        <li>Pacú Iberá garantiza la frescura y calidad de sus productos al momento de la entrega. Utilizamos métodos adecuados de conservación y transporte refrigerado.</li>
                        <li>Dada la naturaleza perecedera de nuestros productos, es fundamental que el cliente revise el estado de la mercancía al momento de recibirla.</li>
                        <li>Cualquier reclamo por defectos de calidad visibles (mal estado, olor, etc.) debe realizarse <strong>dentro de las 2 horas</strong> siguientes a la recepción del producto, contactando a nuestro servicio de atención al cliente (Tel: <a href="tel:+54234512">*54 234512</a> / WhatsApp: <a href="https://wa.me/54937945667789" target="_blank">37945667789</a>) y, si es posible, adjuntando fotografías del producto. Pasado este plazo, se entenderá que el producto fue recibido en conformidad.</li>
                        <li>La garantía no cubre problemas derivados de una incorrecta conservación por parte del cliente una vez entregado el producto. Recomendamos mantener el pescado refrigerado y consumirlo dentro de las 48 horas, o congelarlo inmediatamente para prolongar su vida útil.</li>
                    </ul>

                    <p><strong>7. Política de Devoluciones y Reembolsos:</strong></p>
                    <ul>
                        <li>Debido a la naturaleza perecedera de los productos frescos, <strong>no se aceptan devoluciones</strong> una vez que el pedido ha sido entregado y aceptado por el cliente, salvo en los casos de defectos de calidad comprobables según lo estipulado en el punto anterior (Garantías y Calidad).</li>
                        <li>En caso de que se constate un defecto de calidad imputable a Pacú Iberá al momento de la entrega, se ofrecerá al cliente la reposición del producto afectado o un reembolso parcial/total del importe correspondiente, según el caso y previo acuerdo.</li>
                        <li>No se realizarán reembolsos por errores en el pedido imputables al cliente (ej. selección incorrecta de producto o cantidad) una vez confirmado y/o entregado.</li>
                    </ul>

                     <p><strong>8. Atención al Cliente y Soporte Postventa:</strong></p>
                     <ul>
                         <li>Para cualquier duda, consulta, modificación de pedido (si es posible antes del despacho) o reclamo, puede contactarnos a través de:
                             <ul>
                                 <li>Teléfono: <a href="tel:+54234512">*54 234512</a></li>
                                 <li>WhatsApp: <a href="https://wa.me/54937945667789" target="_blank">37945667789</a></li>
                                 <li>Email: <a href="mailto:wilsonSeverino@gmail.com">wilsonSeverino@gmail.com</a></li>
                                 <li>Horario de Atención: Lunes a Viernes de 8:00 a 17:00 hs</li>
                             </ul>
                         </li>
                     </ul>

                    <p><strong>9. Modificación de las Condiciones:</strong> Pacú Iberá se reserva el derecho de modificar estas Condiciones de Venta en cualquier momento. Las condiciones aplicables serán las vigentes en la fecha en que se realice el pedido.</p>

                    <p><strong>10. Ley Aplicable y Jurisdicción:</strong> Estas Condiciones de Venta se rigen por la ley argentina. Para cualquier controversia derivada de las mismas, las partes se someten a la jurisdicción de los tribunales ordinarios de la ciudad de <strong>Corrientes Capital</strong>, renunciando a cualquier otro fuero que pudiera corresponderles.</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Cierre del container -->
<?= $this->endSection() ?>
