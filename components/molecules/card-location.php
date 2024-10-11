<?php include_once "components/atoms/icon.php"; ?>

<div class="bg-white rounded-2xl shadow-lg p-4 space-y-4 max-h-fit">
    <!-- Nombre y dirección de la sucursal -->
    <div class="flex flex-col space-y-2 ">
        <h4 class="text-lg font-semibold"><?php echo htmlspecialchars($nombre_sucursal); ?></h4>
        <p class="text-sm text-gray-700"><?php echo htmlspecialchars($direccion_sucursal); ?></p>
    </div>

    <!-- Mapa de ubicación sucursal (iframe de Google Maps) -->
    <div class="h-48">
        <iframe src="<?php echo htmlspecialchars($mapa_url); ?>" class="w-full h-full rounded-md" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Teléfono y correo de la sucursal -->
    <div class="flex flex-col space-y-2 ">
        <div class="space-x-4 flex items-center">
            <span class="text-sm">
                <?php echo renderIcon('phone', 'w-5 h-5') ?>
            </span>
            <span class="text-sm">
                <?php echo htmlspecialchars($telefono_sucursal); ?>
            </span>
        </div>
        <div class="space-x-4 flex items-center">

            <span class="text-sm">
                <?php echo renderIcon('mail', 'w-5 h-5') ?>

            </span>
            <a href="mailto:<?php echo htmlspecialchars($email_sucursal); ?>" class="text-sm text-blue-500 hover:underline"><?php echo htmlspecialchars($email_sucursal); ?></a>

        </div>


    </div>

    <!-- Horario de atencion -->
    <div class="border-t pt-4 flex flex-col space-y-2">
        <p class="text-base font-semibold">Horario de Atención</p>

        <!-- Contenido del acordeón que se despliega -->
        <div class="">
            <ul class="text-sm text-gray-600">
                <?php foreach ($horarios as $dia => $horario): ?>
                    <li class="flex justify-between text-sm">
                        <span><?php echo htmlspecialchars($dia); ?></span>
                        <span><?php echo htmlspecialchars($horario); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>