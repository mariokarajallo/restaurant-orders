<?php
include_once 'components/atoms/title.php';
include_once 'components/atoms/text.php';
include_once 'components/atoms/icon.php';

function stats_block() {

  echo "<div class='py-10 bg-r300'>";
    echo "<div class=' container mx-auto'>";
        echo "<div class='grid grid-cols-1 md:grid-cols-3 gap-6'>";
        // Columna de sucursales
        echo "<div class='flex flex-col items-center space-y-2 text-white'>";
            echo "".renderIcon("restaurante","h-12 w-12 text-white")."";
            title(1, "23+");  // Número de sucursales
            text("Sucursales.","text-xl");
        echo "</div>";
        
        
        // Columna de colaboradores
        echo "<div class='flex flex-col items-center space-y-2 text-white'>";
            echo "".renderIcon("hat-cheff","h-12 w-12 text-white")."";
            title(3, "400+");  // Número de colaboradores
            text("Colaboradores.","text-xl");
        echo "</div>";

        // Columna de platos servidos por día
        echo "<div class='flex flex-col items-center space-y-2 text-white'>";
            echo "".renderIcon("dish","h-12 w-12 text-white")."";
            title(3, "70,000+");  // Platos servidos por día
            text("Platos por día.","text-xl");
        echo "</div>";

        echo "</div>";
    echo "</div>";
  echo "</div>";
}
?>
