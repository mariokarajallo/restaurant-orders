<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <?php
    $secondary_news = [
        ['title' => 'La Historia de Nuestra Salsa Boloñesa', 'excerpt' => 'Descubre la historia detrás de nuestra famosa salsa boloñesa, una receta que ha pasado de generación en generación.', 'link' => '#', 'image_url' => 'https://placehold.co/400x200'],
        ['title' => 'El arte de la pasta fresca', 'excerpt' => 'Aprende a hacer pasta fresca desde cero con nuestros consejos y técnicas tradicionales.', 'link' => '#', 'image_url' => 'https://placehold.co/400x200'],
        ['title' => 'Nuestros ingredientes secretos', 'excerpt' => 'Conoce los ingredientes secretos que utilizamos para darle ese sabor único a nuestros platos.', 'link' => '#', 'image_url' => 'https://placehold.co/400x200'],
        ['title' => 'La mejor pizza casera', 'excerpt' => 'Los trucos y consejos para hacer la mejor pizza casera, con una masa crujiente y deliciosa.', 'link' => '#', 'image_url' => 'https://placehold.co/400x200'],
        ['title' => 'El origen de nuestras ensaladas', 'excerpt' => 'Una historia fascinante sobre cómo seleccionamos y preparamos nuestras ensaladas más frescas.', 'link' => '#', 'image_url' => 'https://placehold.co/400x200'],
        ['title' => 'Nuestro menú de postres', 'excerpt' => 'Los dulces más deliciosos que puedes encontrar en nuestro menú de postres, hechos con amor y dedicación.', 'link' => '#', 'image_url' => 'https://placehold.co/400x200']
    ];

    foreach ($secondary_news as $news) {
        $news_title = $news['title'];
        $news_excerpt = $news['excerpt'];
        $news_link = $news['link'];
        $news_image_url = $news['image_url'];
        $type = 'secondary'; // Noticia secundaria
        include 'components/molecules/news.php';
    }
    ?>
</div>
