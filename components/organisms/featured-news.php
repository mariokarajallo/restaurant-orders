<div class="">
    <?php
    // Noticia destacada
    $featured_news = [
        'title' => 'La Historia de Nuestra Salsa Boloñesa',
        'excerpt' => 'Descubre la auténtica historia detrás de nuestra famosa salsa boloñesa...',
        'link' => '#',
        'image_url' => 'https://placehold.co/350x500' // URL de la imagen
    ];

    $news_title = $featured_news['title'];
    $news_excerpt = $featured_news['excerpt'];
    $news_link = $featured_news['link'];
    $news_image_url = $featured_news['image_url'];
    $type = 'featured'; // Noticia destacada
    include 'components/molecules/news.php';
    ?>
</div>
