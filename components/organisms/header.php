<?php
include_once 'components/atoms/icon.php';

echo '
<header class="bg-r300 px-4 md:p-0">
  <div class="container mx-auto grid grid-cols-12 gap-4 items-center">
    <!-- Logo -->
    <div class="col-span-12 md:col-span-4 flex justify-between items-center py-4">
      <a href="/index.php"> 
      <img src="/public/assets/icons/logo-bellini.svg" alt="Bellini Logo" class="h-20">
      </a>
      <!-- Botón de menú hamburguesa en móviles -->
      <button id="menuToggle" class="text-white md:hidden focus:outline-none">
        '.renderIcon('menu-toggle', 'h-8 w-8').'
      </button>
    </div>

    <!-- Menú de navegación para pantallas grandes -->
    <nav id="menu" class="col-span-12 md:col-span-4 flex flex-col md:flex-row justify-center md:space-x-8 text-white hidden md:flex">
      <a href="/index.php?page=menu-categoria" class="hover:text-gray-300">Menu</a>
      <a href="/index.php?page=productos" class="hover:text-gray-300">Hace Tu pedido</a>
      <a href="/index.php?page=sucursales" class="hover:text-gray-300">Sucursales</a>
      <a href="/index.php?page=franquicias" class="hover:text-gray-300">Franquicias</a>
    </nav>

    <!-- Barra de búsqueda y iconos en pantallas grandes -->
    <div class="col-span-12 md:col-span-4 flex justify-center md:justify-end space-x-4 hidden md:flex">
      <!-- Barra de búsqueda -->
      <div class="relative hidden md:block">
        <input type="text" placeholder="Buscar" class="py-2 px-4 rounded-full focus:outline-none">
        <button class="absolute right-2 top-2 text-red-700">
          '.renderIcon('search', 'h-5 w-5 text-r300').'
        </button>
      </div>

      <!-- Iconos para pantallas grandes -->
      <div class="flex space-x-4 text-white items-center">
        <!-- Favoritos -->
        <button class="bg-white rounded-full h-8 w-8 flex items-center justify-center hover:shadow-lg">
          '.renderIcon('favorite', 'h-5 w-5 text-r300').'
        </button>

        <!-- Carrito de compras -->
        <button class="bg-white rounded-full h-8 w-8 flex items-center justify-center hover:shadow-lg">
          '.renderIcon('shopping-cart', 'h-5 w-5 text-r300').'
        </button>

        <!-- Perfil -->
        <button id="profileButtonDesktop" class="bg-white rounded-full h-8 w-8 flex items-center justify-center hover:shadow-lg">
          '.renderIcon('user', 'h-5 w-5 text-r300').'
        </button>
      </div>
    </div>
  </div>

  <!-- Menú desplegable para móviles con transición -->
  <div id="mobileMenu" class="hidden md:hidden flex flex-col space-y-4 text-white text-center py-4 bg-r300 transition-all duration-300 ease-in-out">
    <a href="/index.php?page=menu-categoria" class="hover:text-gray-300">Menu</a>
    <a href="/index.php?page=productos" class="hover:text-gray-300">Hace Tu pedido</a>
    <a href="/index.php?page=sucursales" class="hover:text-gray-300">Sucursales</a>
    <a href="/index.php?page=franquicias" class="hover:text-gray-300">Franquicias</a>

    <!-- Barra de búsqueda en versión móvil -->
    <div class="relative mt-4">
      <input type="text" placeholder="Buscar" class="py-2 px-4 w-full rounded-full focus:outline-none">
      <button class="absolute right-2 top-2 text-red-700">
        '.renderIcon('search', 'h-5 w-5 text-r300').'
      </button>
    </div>

    <!-- Iconos en versión móvil -->
    <div class="flex justify-center space-x-4 mt-4">
      <!-- Favoritos -->
      <button class="bg-white rounded-full h-8 w-8 flex items-center justify-center hover:shadow-lg">
        '.renderIcon('favorite', 'h-5 w-5 text-r300').'
      </button>

      <!-- Carrito de compras -->
      <button class="bg-white rounded-full h-8 w-8 flex items-center justify-center hover:shadow-lg">
        '.renderIcon('shopping-cart', 'h-5 w-5 text-r300').'
      </button>

      <!-- Perfil -->
      <button id="profileButtonMobile" class="bg-white rounded-full h-8 w-8 flex items-center justify-center hover:shadow-lg">
        '.renderIcon('user', 'h-5 w-5 text-r300').'
      </button>
    </div>
  </div>
</header>

<script>
  // Toggle para mostrar/ocultar el menú móvil con transición
  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");

  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>
';
?>
