<?php 
include 'components/atoms/button.php'; 
include 'components/atoms/title.php';
?>

<div class="container mx-auto grid grid-cols-1 md:grid-cols-12 md:space-x-4 ">
    <div class="md:col-span-8 space-y-4">
        <!-- Título de confirmación -->
        <div class="">
            <?php title(2, "¡Gracias por tu pedido!", "text-black"); ?>
        </div>
        <div class="mt-6 border-t pt-4"></div>

        <div class="text-lg font-bold text-black">
            ¡Tu pedido ha sido confirmado con éxito!
        </div>

        <!-- Información del pedido -->
        <p>Nos complace informarte que tu pedido está en camino y será entregado hoy entre las 14:00 hs y las 15:00 hs.</p>
        <p class="mt-4">Para cualquier consulta o cambio en tu pedido, por favor contáctanos al <strong>021 987 675</strong></p>

        <!-- IMAGEN -->
        <div class="h-64 md:h-96 text-center">
            <img src="/public/assets/images/banner-gracias-pedido.jpg" alt="Gracias por tu pedido" class="w-full h-full object-contain">
        </div>

        <!-- Texto observaciones -->
        <div class="">
            <p class="text-lg font-semibold">Observaciones</p>
            <p>Nos esforzamos por cumplir con los horarios de entrega. Debido a la alta demanda, los tiempos de entrega pueden ser mayores. Agradecemos tu paciencia y comprensión.</p>
        </div>
    </div>

    <div class="md:col-span-4 space-y-4 mt-8 md:mt-0">
        <!-- Resumen del pedido -->
        <div class="bg-gray-100 p-6 rounded-2xl shadow-md space-y-4">
            <div class="text-lg font-semibold">Detalles del pedido</div>
            <div class="border-t pt-4"></div>
            <p><strong>Número de Pedido:</strong> #12345667</p>
            <p><strong>Fecha y Hora del Pedido:</strong> mie. 15 de abril, 22:22 hs</p>
            <p><strong>Dirección de entrega:</strong> Calle 123 esq. Avd. Nombre Calle</p>

            <div class="flex justify-between">
                <span class="text-lg font-semibold">Pasta</span>
                <span class="text-lg font-semibold">Gs. 75.000</span>
            </div>
            <div class="flex justify-between">
                <span class="text-lg font-bold">Total</span>
                <span class="text-lg font-bold">Gs. 75.000</span>
            </div>
        </div>

        <!-- Botón de regreso -->
        <div class="text-center">
            <?php button("Volver al inicio", "md", "primary", false, "", "w-full", '/?page=home'); ?>
        </div>
    </div>
</div>
