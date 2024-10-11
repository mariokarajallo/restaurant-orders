<div class="top-news grid grid-cols-1 gap-4">
    <?php
    // Noticias principales
    $top_news = [
        ['title' => 'Noticia Principal 1', 'excerpt' => 'Esta es una noticia principal que destaca los eventos más importantes del día. Mantente informado con las últimas actualizaciones y detalles.', 'link' => '#', 'image_url' => 'https://placehold.co/250x250'],
        ['title' => 'Noticia Principal 2', 'excerpt' => '
        Esta es otra noticia principal que destaca los eventos más importantes del día. Mantente informado con las últimas actualizaciones y detalles.', 'link' => '#', 'image_url' => 'https://placehold.co/250x250'],
    ];

    foreach ($top_news as $news) {
        $news_title = $news['title'];
        $news_excerpt = $news['excerpt'];
        $news_link = $news['link'];
        $news_image_url = $news['image_url'];
        $type = 'top'; // Noticia principal
        include 'components/molecules/news.php';
    }
    ?>
</div>
