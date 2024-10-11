<?php
$images = [
  ['url' => '#', 'src' => '/public/assets/images/banner-principal-01.png', 'alt' => 'Imagen 1'],
  ['url' => '#', 'src' => '/public/assets/images/banner-principal-02.png', 'alt' => 'Imagen 2'],
  ['url' => '#', 'src' => '/public/assets/images/banner-principal-03.png', 'alt' => 'Imagen 3'],
  ['url' => '#', 'src' => '/public/assets/images/banner-principal-04.png', 'alt' => 'Imagen 4'],
];
?>

<div id="carousel" class="relative w-full overflow-hidden">
  <!-- Carrusel de imágenes -->
  <div id="carousel-images" class="flex transition-transform duration-500 ease-out">
    <?php foreach ($images as $image): ?>
      <div class="w-full flex-shrink-0 h-64 md:h-96 lg:h-[350px]">
        <a href="<?php echo $image['url']; ?>">
          <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full h-full object-cover">
        </a>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Controles del carrusel -->
  <button id="prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-black bg-opacity-75 rounded-full p-2 md:p-3 lg:p-4">
    &#10094;
  </button>
  <button id="next" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-black bg-opacity-75 rounded-full p-2 md:p-3 lg:p-4">
    &#10095;
  </button>
</div>


<script>
  let currentIndex = 0;
  const images = document.querySelectorAll('#carousel-images > div');
  const totalImages = images.length;
  const autoplayDelay = 3000; // Cambiar cada 3 segundos (ajusta según tus necesidades)

  // Función para actualizar el carrusel
  function updateCarousel() {
    const carouselImages = document.getElementById('carousel-images');
    const newTransformValue = `translateX(-${currentIndex * 100}%)`;
    carouselImages.style.transform = newTransformValue;
  }

  // Función para avanzar la imagen
  function nextImage() {
    currentIndex = (currentIndex + 1) % totalImages; // Avanza una imagen
    updateCarousel();
  }

  // Función para retroceder la imagen
  function prevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Retrocede una imagen
    updateCarousel();
  }

  // Añadir event listeners para los botones de control
  document.getElementById('next').addEventListener('click', nextImage);
  document.getElementById('prev').addEventListener('click', prevImage);

  // Autoplay con setInterval
  let autoplay = setInterval(nextImage, autoplayDelay);

  // Pausar autoplay cuando se interactúa con los botones
  document.getElementById('next').addEventListener('click', () => {
    clearInterval(autoplay); // Detener autoplay al hacer clic en "siguiente"
    autoplay = setInterval(nextImage, autoplayDelay); // Reiniciar el autoplay después de la interacción
  });

  document.getElementById('prev').addEventListener('click', () => {
    clearInterval(autoplay); // Detener autoplay al hacer clic en "anterior"
    autoplay = setInterval(nextImage, autoplayDelay); // Reiniciar el autoplay después de la interacción
  });
</script>