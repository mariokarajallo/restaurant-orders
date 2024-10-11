<?php

include 'components/organisms/login-modal.php';
include 'components/organisms/register-modal.php';

// Obtiene la página y la sección actual desde la URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$section = isset($_GET['section']) ? $_GET['section'] : 'datos-personales';  // Sección por defecto es 'datos-personales'




?>
<!-- Estructura HTML general -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bellini</title>
  <link href="/public/css/tailwind.css" rel="stylesheet">
  <!-- Heroicons CDN -->
  <script src="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/outline.js"></script>

</head>

<body>

  <?php include 'components/organisms/header.php'; ?>

  <?php



  // Banner principal
  switch ($page) {
    case 'home':
        include 'components/organisms/banner-section.php';
  }

  // Contenido principal
  echo '<div class="pt-16 px-4 md:px-0">';
  // Lógica para cargar diferentes templates basados en la variable $page
  switch ($page) {
    case 'login':
      include 'components/templates/login.php';
      break;
    case 'registro':
        include 'components/templates/register.php';
        break;

    case 'perfil':
      include 'components/templates/profile.php';  // Carga el template de perfil
      break;

    case 'home':
      include 'components/templates/home.php';  // Página de inicio
      break;

    case 'servicios':
      include 'components/templates/service-option.php';  // Página de servicios
      break;

    case 'menu-categoria':
      include 'components/templates/menu-category.php';
      break;

    case 'productos':
      include 'components/templates/products.php';
      break;

    case 'gracias':
      include 'components/templates/thanks.php';
      break;

    case 'trabaja-con-nosotros':
      include 'components/templates/work.php';
      break;

    case 'nosotros':
      include 'components/templates/about.php';

      break;

    case 'sucursales':
      include 'components/templates/locations.php';

      break;

    case 'terminos-y-condiciones':
      include 'components/templates/terms-and-conditions.php';

      break;

    case 'franquicias':
      include 'components/templates/franchise.php';

      break;
    case 'blog':
      include 'components/templates/blog.php';

      break;

    default:
      include 'components/templates/404.php';
      break;
  }

  echo '</div>';

  
  echo '<div class="pb-16 px-0">';
  switch ($page) {
    case 'nosotros':
      include 'components/molecules/stats-block.php';
      stats_block();
  }
  echo '</div>';
  ?>
  <!-- FOOTER -->
  <?php include 'components/organisms/footer.php'; ?>

  <script>
    // Obtener botones de perfil
    const profileButtonDesktop = document.getElementById('profileButtonDesktop');
    const profileButtonMobile = document.getElementById('profileButtonMobile');


    // Obtener elementos de los modales
    const loginModal = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');
    const openRegisterModal = document.getElementById('openRegisterModal');
    const closeModal = document.getElementById('closeModal');
    const closeRegisterModal = document.getElementById('closeRegisterModal');


    // Escuchar el clic en el botón de perfil en escritorio
    if (profileButtonDesktop) {
      profileButtonDesktop.addEventListener('click', () => {
        // Abrir el modal de inicio de sesión en escritorio
        loginModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
      });
    }

    // Escuchar el clic en el botón de perfil en móvil
    if (profileButtonMobile) {
      profileButtonMobile.addEventListener('click', () => {
        // Redirigir a la página completa en dispositivos móviles
        window.location.href = "/index.php?page=login";
        console.log("click mobile");
      });
    }

    // Cerrar modal al hacer clic en el botón de cerrar
    if (closeModal) {
      closeModal.addEventListener('click', () => {
        loginModal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      });
    }

    // Abrir modal de registro y cerrar modal de inicio de sesión
    if (openRegisterModal) {
      openRegisterModal.addEventListener('click', () => {
        loginModal.classList.add('hidden'); // Ocultar el modal de inicio de sesión
        registerModal.classList.remove('hidden'); // Mostrar el modal de registro
      });
    }

    // Cerrar modal de registro
    if (closeRegisterModal) {
      closeRegisterModal.addEventListener('click', () => {
        registerModal.classList.add('hidden'); // Ocultar el modal de registro
      });
    }

    // Cerrar el modal al hacer clic fuera del contenido del modal de registro
    window.addEventListener('click', (e) => {
      if (e.target === registerModal) {
        registerModal.classList.add('hidden'); // Cerrar modal de registro al hacer clic fuera de él
      }
    });

    // Cerrar el modal al hacer clic fuera del contenido del modal de inicio de sesión
    window.addEventListener('click', (e) => {
      if (e.target === loginModal) {
        loginModal.classList.add('hidden'); // Cerrar modal de inicio de sesión al hacer clic fuera de él
      }
    });
  </script>

</body>

</html>