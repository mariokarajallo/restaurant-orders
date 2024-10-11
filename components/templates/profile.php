<?php
include 'components/organisms/profile-section.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/tailwind.css" rel="stylesheet">
    <title>Perfil - Bellini</title>
</head>

<body>
        <?php

        // Llama a la función profileSection y pasa los parámetros necesarios
        profileSection('Javier', isset($_GET['section']) ? $_GET['section'] : 'datos-personales');
        ?>
</body>

</html>