<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/select.php';
include_once 'components/atoms/radio.php';

function personalData()
{
    echo '
    <div class="space-y-4">
        <!-- Primera Fila: Nombre completo y Fecha de nacimiento -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Nombre completo -->
            <div class="space-y-2 md:col-span-1">
                <p class="text-gray-700 font-bold">Nombre completo:</p>';
    inputField("Nombre completo", "text", "nombre_completo", "required");
    echo '
            </div>
            
            <!-- Fecha de nacimiento (con calendario) -->
            <div class="space-y-2 md:col-span-1">
                <p class="text-gray-700 font-bold">Fecha de nacimiento:</p>';
    inputField("Fecha de nacimiento (dd-mm-aaaa)", "date", "fecha_nacimiento", "required");
    echo '
            </div>
        </div>

        <!-- Segunda Fila: Calle, Teléfono, Barrio, Ciudad -->
        <div class="grid grid-cols-1 md:grid-cols-8 gap-4">
            <!-- Calle -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">Calle:</p>';
    inputField("Calle", "text", "calle", "required");
    echo '
            </div>

            <!-- Teléfono con validación de formato -->
            <div class="col-span-2 space-y-2">
                <div class="flex space-x-2 items-center">
                    <p class="text-gray-700 font-bold">Teléfono:</p>
                    <span class="text-xs text-gray-700">09xx-xxx-xxx</span>
                </div>';
    inputField("Teléfono", "tel", "telefono", "required pattern=\"^09[0-9]{2}-[0-9]{3}-[0-9]{3}$\" placeholder=\"0985-123-456\"");
    echo '
            </div>

            <!-- Barrio -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">Barrio:</p>';
    inputField("Barrio", "text", "barrio", "required");
    echo '
            </div>

            <!-- Ciudad -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">Ciudad:</p>';
    inputField("Ciudad", "text", "ciudad", "required");
    echo '
            </div>
        </div>

        <!-- Tercera Fila: Estado Civil y Nivel de Estudio -->

        <div class="grid grid-cols-1 md:grid-cols-8 gap-4">

            <!-- Nivel de Estudio -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">Nivel de Estudio:</p>';
                select("nivel_estudio", ["1" => "Primario", "2" => "Secundario", "3" => "Técnico", "4" => "Universitario"], "required");
             echo '
            </div>

            <!-- Estado Civil -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">Estado Civil:</p>';
                 select("estado_civil", ["1" => "Soltero", "2" => "Casado","3" => "Divorciado", "4" => "Viudo"], "required");
            echo '
            </div>

        </div>

        <!-- Cuarta Fila: ¿Tiene hijos? y ¿Cuántos? -->
        <div class="grid grid-cols-1 md:grid-cols-8 gap-4">
         <!-- ¿Tiene movilidad propia? -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">¿Tiene movilidad propia?</p>';
                radio("movilidad", "Sí", "si");
                radio("movilidad", "No", "no");
                echo '
            </div>

             <!-- ¿Puedes trabajar fines de semana?-->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">¿Puedes trabajar fines de semana?</p>';
                radio("fin_de_semana", "Sí", "si");
                radio("fin_de_semana", "No", "no");

                echo '      
            </div>

            <!-- ¿Tienes hijos? -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">¿Tienes hijos?</p>';
                radio("tiene_hijos", "Sí", "si", "onChange=\"toggleHijosInput(true)\"");
                radio("tiene_hijos", "No", "no", "onChange=\"toggleHijosInput(false)\"");
                echo '
            </div>
            
            <!-- ¿Cuántos hijos? -->
            <div class="col-span-2 space-y-2" id="cantidad_hijos_container" style="display: none;">
                <p class="text-gray-700 font-bold">¿Cuántos hijos?</p>';
                inputField("Cantidad de hijos", "number", "cantidad_hijos", "min=\"0\"");
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
