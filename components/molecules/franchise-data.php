<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/select.php';
include_once 'components/atoms/radio.php';

function franchiseData()
{
    echo '
    <div class="space-y-4">
        <!-- NOMBRE - CEDULA - DOMICILIO -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Nombre completo -->
            <div class="space-y-2 col-span-1">
                <p class="text-gray-700 font-bold">Nombre completo:</p>';
            inputField("Nombre completo", "text", "nombre_completo", "required");
            echo '
            </div>
            
            <!-- cedula -->
            <div class="space-y-2 col-span-1">
                <p class="text-gray-700 font-bold">Cédula de identidad:</p>';
            inputField("Cédula de identidad", "text", "cedula", "required");
            echo '
            </div>
           
            <!-- domicilio -->
            <div class="space-y-2 col-span-1">
                <p class="text-gray-700 font-bold">Domicilio:</p>';
            inputField("Domicilio", "text", "domicilio", "required");
            echo '
            </div>
        </div>

        <!-- CIUDAD - REPRESENTANTE - TIPOLOGIA -->
        <div class="grid grid-cols-1 md:grid-cols-3  text-gray-900 gap-4">
            <div class="col-span-1 space-y-2">
                <p class="font-bold">Ciudad:</p>';
            inputField("Ciudad", "text", "ciudad", "required");
            echo '
            </div>

             <div class="col-span-1 space-y-2">
                <p class="font-bold">Representante Legal:</p>';
            inputField("Representante Legal", "text", "representante_legal", "required");

            echo '
            </div>
        </div>


        <!-- TIPOLOGIA FRANQUICIA -->
        <div class="grid grid-cols-1  md:grid-cols-3 gap-4 text-gray-900">
            <div class="col-span-full space-y-2">
            <p class=" font-bold">Tipos de franquicias:</p>
                <p class="text-sm"><strong>Tipo 1 - Local Góndola:</strong> Locales con superficies de hasta 40m2 . Ubicados en Shoppings y/o Supermercados.
                <p class="text-sm"><strong>Tipo 2 - Local Base:</strong> Locales con superficies entre 40 y 80 m 2. No cuentan con espacios para niños.
                <p class="text-sm"><strong>Tipo 3 - Local Ícono:</strong> Locales con superficies entre 80 y 120 m2. Ubicados estratégicamente en zonas de alto tráfico. Donde hay poca presencia de otros locales Amandau. Cuentan con espacios para niños.</p>
                
                ';
            echo '
            </div>

            <div class="col-span-1 space-y-2">
                <p class="font-bold">Tipología:</p>';
            select("Tipología", ["Tipo 1 - Local Góndola", "Tipo 2 - Local Base", "Tipo 3 - Local Ícono"], "required");

            echo '
            </div>
        </div>

        <!-- DIRECCION FRANQUICIA -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-gray-900">
            <div class="col-span-1 space-y-2">
                <p class="font-bold">Dirección del local para la franquicia:</p>';
            inputField("Dirección del local", "text", "direccion_local", "required");
            echo '
            </div>

            <div class="col-span-1 space-y-2">
                <p class="font-bold">Barrio del local para la franquicia:</p>';
            inputField("Barrio del local", "text", "barrio_local", "required");

            echo '
            </div>

            <div class="col-span-1 space-y-2">
                <p class=" font-bold">Ciudad del local para la franquicia:</p>';
            inputField("Ciudad del local", "text", "ciudad_local", "required");

            echo '
            </div>

             <div class="col-span-1 space-y-2">
                <p class="font-bold">Zona del local para la franquicia:</p>';
            inputField("Zona del local", "text", "zona_local", "required");
            echo '
            </div>

             <div class="col-span-1 space-y-2">
                <p class="font-bold">Expectativa de inversión (Gs):</p>';
            inputField("Expectativa de inversión", "text", "expectativa_inversion", "required");
            echo '
            </div>
        </div>

        



        

    </div>';
}
?>


<script>
    function toggleHijosInput(show) {
        var cantidadHijosContainer = document.getElementById('cantidad_hijos_container');
        cantidadHijosContainer.style.display = show ? 'block' : 'none';
    }
</script>