<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/select.php';
include_once 'components/atoms/radio.php';

function contactData()
{
    echo '
    <div class="space-y-4 md:w-[700px]">
        <!-- Nombre completo y correo de contacto -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Nombre completo -->
            <div class="space-y-2 md:col-span-2">
                <p class="text-gray-700 font-bold">Nombre completo:</p>';
    inputField("Nombre completo", "text", "nombre_completo", "required");
    echo '
            </div>
            
            <!-- correo -->
            <div class="space-y-2 md:col-span-2">
                <p class="text-gray-700 font-bold">Correo:</p>';
    inputField("Correo", "email", "correo", "required");
    echo '
            </div>
        </div>

        <!-- ASUNTO -->
        <div class="grid grid-cols-1 gap-4">
            <div class="col-span-4 space-y-2">
                <p class="text-gray-700 font-bold">Asunto:</p>';
    inputField("Asunto", "text", "asunto", "required");
    echo '
            </div>
        </div>

        <!-- MENSAJE -->

        <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-4 space-y-2">
                            <p class="text-gray-700 font-bold">Mensaje:</p>
                            <textarea name="mensaje"rows="6" class="w-full p-2 border border-gray-300 rounded-2xl focus:ring-r300 focus:outline-none focus:ring-2 bg-gray-50 " required></textarea>';
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