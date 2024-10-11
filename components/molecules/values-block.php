<?php
include_once 'components/atoms/title.php';
include_once  'components/atoms/text.php';

function values_block() {

    //3 columanas
    echo "<div class='grid grid-cols-1 md:grid-cols-3 gap-6'>";
        // Columna de integridad
        echo "<div class='col-span-1 grid content-start space-y-4'>";
        title(2,"Misión");
        text("Expandir la marca y posicionarla a nivel internacional, convirtiéndonos en referentes en cada uno de los mercados");
        echo "</div>";

        // Columna de excelencia
        echo "<div class='col-span-1 grid content-start space-y-4'>";
        title(2,"Visión");
        text("Ofrecer alimentos frescos y sanos, con un alto estándar de calidad, creando experiencias únicas y excepcionales.");
        echo "</div>";

        // Columna de compromiso
        echo "<div class='col-span-1 grid content-start space-y-4'>";
        title(2, "Valores");
        echo "<ul class='list-disc list-inside'>";
            echo "<li>Integridad.</li>";
            echo "<li>Excelencia.</li>";
            echo "<li>Compromiso.</li>";
            echo "<li>Satisfacción del cliente (Felicidad).</li>";
            echo "<li>Innovación.</li>";
        echo "</ul>";
        echo "</div>";

    echo "</div>";
}
?>
