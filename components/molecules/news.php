
<?php
include_once 'components/atoms/image.php';
include_once 'components/atoms/icon.php';

switch ($type) {
    case 'top':
        $container_classes = 'flex flex-col md:flex-row gap-4';  // Contenedor de noticias principales
        $image_classes = 'h-52 md:h-[250px] md:w-[250px]';  // Imagen mediana
        $news_title_classes = 'text-lg md:text-2xl';  // Título más grande para noticias principales
        $excerpt_classes = 'text-gray-600';  // Clase para el párrafo de la noticia
        break;
        
    case 'featured':
        $container_classes = 'flex flex-col md:flex-row gap-4 h-full';  // Contenedor de noticias destacadas
        $image_classes = 'h-64 md:h-full md:w-[350px]';  // Imagen grande para noticias destacadas
        $news_title_classes = 'text-lg md:text-2xl';  // Título más grande para noticias destacadas
        $excerpt_classes = 'text-gray-600';  // Clase para el párrafo de la noticia
        break;

    case 'secondary':
        $container_classes = 'flex flex-col gap-4';  // Contenedor de noticias secundarias
        $image_classes = 'h-40 md:h-[200px] md:w-[400px]';  // Imagen más pequeña
        $news_title_classes = 'text-lg md:text-lg';  // Título más pequeño para noticias secundarias
        $excerpt_classes = 'text-gray-600 hidden md:block';  // Clase para el párrafo de la noticia
        break;

}
?>

<div class="<?php echo $container_classes; ?>">
    <div class="image">
        <div class="<?php echo $image_classes; ?>">
            <!-- Uso de la función de imagen -->
            <?php image($news_image_url, 'miniatura articulo', 'rounded-2xl'); ?>
        </div>
    </div>
    <div class="space-y-1">
        <!-- Aplicamos las clases dinámicamente al título -->
        <h2 class="<?php echo $news_title_classes; ?>"><?php echo $news_title; ?></h2>
        <p class="<?php echo $excerpt_classes ?>"><?php echo $news_excerpt; ?></p>
        <a href="<?php echo $news_link; ?>" class="text-blue-500 hover:underline flex ">
            Leer más... 
            <?php echo renderIcon('arrow-right', 'h-5 w-5 text-blue-500 transform transition-transform duration-300 hover:scale-110'); ?>
        </a>
    </div>
</div>
