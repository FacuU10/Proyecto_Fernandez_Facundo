<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
   <?= esc($page_title) // Muestra el título pasado desde el controlador ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Bienvenidos a Taller de Programación I</h1>

    <!-- Presentación de la empresa -->
    <div class="presentacion-empresa">
        <h2>Pacú Iberá: Pescados Frescos de Calidad</h2>
        <p>Somos Pacú Iberá, dedicados a la venta de pescados frescos y de excelente calidad, con especialización en pacú. Contamos con más de 10 años de experiencia en el rubro, promoviendo prácticas sostenibles que respetan el equilibrio del ecosistema del río.</p>
        <p>Nuestro compromiso va más allá de ofrecer un producto: valoramos profundamente la preservación de las especies y del entorno natural en cada una de nuestras actividades. Esta filosofía nos ha permitido consolidarnos como una empresa responsable y confiable en el mercado local.</p>
        <!-- Puedes añadir imágenes o más secciones aquí -->
    </div>

    <!-- Introducción a productos/servicios -->
    <div class="productos-servicios">
        <h3>Nuestros Productos Destacados</h3>
        <ul>
            <li>Pacú Entero Fresco</li>
            <li>Filetes de Pacú</li>
            <li>Otros pescados de río (según temporada)</li>
            <!-- Añade más si es necesario -->
        </ul>
        <p>Ofrecemos productos preparados con los más altos estándares de higiene y conservación.</p>
    </div>

    <!-- Ejemplo de cómo estaba tu div (puedes adaptarlo o eliminarlo) -->
    <!--
    <div class="mi-div" style="color: blue;">
        <h2> Ejemplo de div y span </h2>
        <p class="mi-parrafo"><span style="color: blue;"> Somos Pacú Iberá nos dedicamos a la venta de pescados frescos y de excelente calidad</span>, con especialización en pacú...</p>
    </div>
    -->

<?= $this->endSection() ?>
