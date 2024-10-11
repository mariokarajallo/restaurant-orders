<?php
 include_once 'components/atoms/icon.php';

 echo '
<footer class="bg-white border-gray-300">
  <div class="container mx-auto grid grid-cols-1 gap-8 md:grid-cols-5 py-8 px-4">
  
    <!-- Columna 1: Logo, Correo y Número -->
    <div class="flex flex-col items-center md:items-start space-y-4">
      <div class="h-20 w-auto">
        <img src="/public/assets/icons/logo-bellini-2.svg" alt="Bellini Logo" class="w-full h-full object-contain">
      </div>
      <p class="text-gray-700 text-center md:text-left">bellinicentral@gmail.com</p>
      <p class="text-gray-700 text-center md:text-left">+123 1234 1234</p>
    </div>

    <!-- Columna 2: Redes Sociales -->
    <div class="flex flex-col items-center space-y-4">
      <h3 class="text-r300 font-bold">Síguenos</h3>
      <div class="flex space-x-2">
        <a href="#" class="bg-y300 rounded-full h-10 w-10 flex items-center justify-center hover:shadow-md">
         '.renderIcon('facebook','h-5 w-5 text-black').'
        </a>
        <a href="#" class="bg-y300 rounded-full h-10 w-10 flex items-center justify-center hover:shadow-md">
          '.renderIcon('instagram','h-5 w-5 text-black').'
        </a>
        <a href="#" class="bg-y300 rounded-full h-10 w-10 flex items-center justify-center hover:shadow-md">
          '.renderIcon('twitter','h-5 w-5 text-black').'
        </a>
        <a href="#" class="bg-y300 rounded-full h-10 w-10 flex items-center justify-center hover:shadow-md">
         '.renderIcon('youtube','h-5 w-5 text-black').'
        </a>
        <a href="#" class="bg-y300 rounded-full h-10 w-10 flex items-center justify-center hover:shadow-md">
          '.renderIcon('tiktok','h-5 w-5 fill-current text-black').'
        </a>
      </div>
    </div>

    <!-- Columna 3: Bellini -->
    <div class="flex flex-col items-center md:items-start space-y-4">
      <h3 class="text-r300 font-bold">Bellini</h3>
      <ul class="space-y-2 text-center md:text-left">
        <li><a href="/index.php?page=nosotros" class="text-gray-700 hover:text-r400">Nosotros</a></li>
        <li><a href="/index.php?page=nosotros" class="text-gray-700 hover:text-r400">Misión</a></li>
        <li><a href="/index.php?page=nosotros" class="text-gray-700 hover:text-r400">Visión</a></li>
        <li><a href="/index.php?page=sucursales" class="text-gray-700 hover:text-r400">Sucursales</a></li>
        <li><a href="/index.php?page=blog" class="text-gray-700 hover:text-r400">Blog</a></li>
      </ul>
    </div>

    <!-- Columna 4: Equipo -->
    <div class="flex flex-col items-center md:items-start space-y-4">
      <h3 class="text-r300 font-bold">Equipo</h3>
      <ul class="space-y-2 text-center md:text-left">
        <li><a href="/index.php?page=trabaja-con-nosotros" class="text-gray-700 hover:text-r400">Trabaja con nosotros</a></li>
        <li><a href="/index.php?page=franquicias" class="text-gray-700 hover:text-r400">Franquicias</a></li>
        <li><a href="/index.php?page=sucursales" class="text-gray-700 hover:text-r400">Contáctanos</a></li>
      </ul>
    </div>

    <!-- Columna 5: Nuestro Menú -->
    <div class="flex flex-col items-center md:items-start space-y-4">
      <h3 class="text-r300 font-bold">Nuestro Menú</h3>
      <ul class="space-y-2 text-center md:text-left">
        <li><a href="/index.php?page=productos&categoria=pastas" class="text-gray-700 hover:text-r400">Pastas</a></li>
        <li><a href="/index.php?page=productos&categoria=lasagnas" class="text-gray-700 hover:text-r400">Lasagnas</a></li>
        <li><a href="/index.php?page=productos&categoria=pizzas" class="text-gray-700 hover:text-r400">Pizzas</a></li>
        <li><a href="/index.php?page=productos&categoria=ensaladas" class="text-gray-700 hover:text-r400">Ensaladas</a></li>
        <li><a href="/index.php?page=productos&categoria=bebidas" class="text-gray-700 hover:text-r400">Bebidas</a></li>
        <li><a href="/index.php?page=productos&categoria=postres" class="text-gray-700 hover:text-r400">Postres</a></li>
      </ul>
    </div>
  </div>

  <!-- Línea divisoria -->
  <div class="border-t border-gray-300 my-6"></div>

  <!-- Enlaces debajo de la línea divisoria -->
  <div class="container mx-auto space-y-4 md:space-x-4 pb-4 text-center md:text-left">
    <a href="#" class="text-gray-700 hover:text-r400">Términos y condiciones</a>
    <a href="#" class="text-gray-700 hover:text-r400">Promociones</a>
  </div>
</footer>
';
?>
