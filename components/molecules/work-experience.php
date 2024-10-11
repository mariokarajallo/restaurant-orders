<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/select.php';
include_once 'components/atoms/radio.php';

function workExperience()
{
    echo '
    <!-- Experiencia Laboral-->
        <div class="grid grid-cols-1 md:grid-cols-8 gap-4">    
            <!-- Experiencia Laboral -->
             <div class="col-span-2 space-y-2">
                    <p class="text-gray-700 font-bold">¿ Posee experiencia laboral?</p>';
                    radio("experiencia_laboral", "Sí", "si", "onChange=\"toggleExperienciaLaboral(true)\"");
                    radio("experiencia_laboral", "No", "no", "onChange=\"toggleExperienciaLaboral(false)\"");
                    echo '
            </div>
        </div> 

        <!-- Contenedor para múltiples experiencias laborales -->
        <div id="experiencia_laboral_container" class="space-y-4"></div>

        <!-- Botón para agregar otra experiencia laboral -->
        <div class="col-span-8 space-y-2">
            <button id="add-experiencia-laboral-btn" type="button" onclick="addExperienciaLaboral()" class="bg-r300 text-white px-4 py-2 rounded-lg hover:bg-r400" style="display: none;">Agregar experiencia laboral</button>
        </div>

        <!-- TIEMPO Y CARGO -->

        <div class="grid grid-cols-1 md:grid-cols-8 gap-4">

            <!-- Disponibilidad de Tiempo -->
            <div class="col-span-3 space-y-2">
                <p class="text-gray-700 font-bold">Disponibilidad de tiempo:</p>';
                select("tiempo", ["1" => "Turno Mañana - Tarde (08:00 hs a 17:00 hs)", "2" => "Turno Tarde - Noche (17:00 hs a 00:00 hs)"], "required");
             echo '
            </div>

            <!-- Estado Civil -->
            <div class="col-span-2 space-y-2">
                <p class="text-gray-700 font-bold">Cargo al cual postula:</p>';
                 select("cargo", ["1" => "Cocinero", "2" => "Ayudante de cocina", "3" => "Panadero", "4" => "Mozo","5" => "Cajero/a","6" => "Chofer", "7" => "Limpiador/a", "8" => "Encargado de depósito"], "required");
            echo '
            </div>

        </div>
        
        ';
}

?>


<script>
    function toggleExperienciaLaboral(show) {
        var experienciaLaboralContainer = document.getElementById('experiencia_laboral_container');
        var addExperienciaLaboralBtn = document.getElementById('add-experiencia-laboral-btn');

        // Mostrar/ocultar la sección y el botón
        if (show) {
            experienciaLaboralContainer.style.display = 'block';
            addExperienciaLaboralBtn.style.display = 'block';
        } else {
            experienciaLaboralContainer.style.display = 'none';
            addExperienciaLaboralBtn.style.display = 'none';
        }
    }

    function addExperienciaLaboral() {
        var container = document.getElementById('experiencia_laboral_container');
        var newBlockId = 'experiencia-' + Date.now(); // Generar un ID único para cada bloque
        var newBlock = `
           <div id="${newBlockId}" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-4">
    <!-- Último trabajo -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Último trabajo:</p>
        <input type="text" name="ultimo_trabajo[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Cargo -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Cargo:</p>
        <input type="text" name="cargo[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Lugar de trabajo -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Lugar de trabajo:</p>
        <input type="text" name="lugar_trabajo[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Fecha de ingreso -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Fecha de ingreso:</p>
        <input type="date" name="fecha_ingreso[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Fecha de salida -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Fecha de salida:</p>
        <input type="date" name="fecha_salida[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Motivo de salida -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Motivo de salida:</p>
        <input type="text" name="motivo_salida[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Referencia laboral -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Referencia laboral:</p>
        <input type="text" name="nombre_referencia[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Número de contacto de la referencia -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Número de contacto:</p>
        <input type="tel" name="numero_referencia[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50" placeholder="09xx-xxx-xxx">
    </div>

    <!-- Cargo de la referencia -->
    <div class="col-span-1 lg:col-span-2 space-y-2">
        <p class="text-gray-700 font-bold">Cargo de la referencia:</p>
        <input type="text" name="cargo_referencia[]" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
    </div>

    <!-- Botón para eliminar esta experiencia laboral -->
    <div class="col-span-1 lg:col-span-8 space-y-2 flex justify-end">
        <button type="button" onclick="removeExperienciaLaboral('${newBlockId}')" class="bg-yellow-500 flex text-white px-4 py-2 rounded-lg hover:bg-yellow-600 space-x-2">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
            <span>Eliminar experiencia laboral</span>
        </button>
    </div>
</div>

        `;
        container.insertAdjacentHTML('beforeend', newBlock);
    }

    function removeExperienciaLaboral(blockId) {
        var block = document.getElementById(blockId);
        if (block) {
            block.remove();
        }
    }
</script>