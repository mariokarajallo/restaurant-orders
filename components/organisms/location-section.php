<?php if (isset($sucursales) && !empty($sucursales)): ?>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-4">
        <?php foreach ($sucursales as $index => $sucursal): ?>
            <?php
            // Extraemos los datos de la sucursal
            $nombre_sucursal = $sucursal['nombre'];
            $direccion_sucursal = $sucursal['direccion'];
            $mapa_url = $sucursal['mapa_url'];
            $telefono_sucursal = $sucursal['telefono'];
            $email_sucursal = $sucursal['email'];
            $horarios = $sucursal['horarios'];

            ?>
            <!-- Incluye el componente card-location.php -->
            <?php include 'components/molecules/card-location.php'; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
