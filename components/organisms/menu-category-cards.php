<?php
$categories = [
    [
        'title' => 'Pastas',
        'imageSrc' => '/public/assets/images/categoria-pasta.png',
        'altText' => 'Imagen de Pastas',
        'link' => 'index.php?page=productos&categoria=pastas',
    ],
    [
        'title' => 'Lasagnas',
        'imageSrc' => '/public/assets/images/categoria-lasagna.png',
        'altText' => 'Imagen de Lasagnas',
        'link' => 'index.php?page=productos&categoria=lasagnas',
    ],
    [
        'title' => 'Pizzas',
        'imageSrc' => '/public/assets/images/categoria-pizza.png',
        'altText' => 'Imagen de Pizzas',
        'link' => 'index.php?page=productos&categoria=pizzas',
    ],
    [
        'title' => 'Ensaladas',
        'imageSrc' => '/public/assets/images/categoria-ensalada.png',
        'altText' => 'Imagen de Ensaladas',
        'link' => 'index.php?page=productos&categoria=ensaladas',
    ],
    [
        'title' => 'Bebidas',
        'imageSrc' => '/public/assets/images/categoria-bebida.png',
        'altText' => 'Imagen de Bebidas',
        'link' => 'index.php?page=productos&categoria=bebidas',
    ],
    [
        'title' => 'Postres',
        'imageSrc' => '/public/assets/images/categoria-postre.png',
        'altText' => 'Imagen de Postres',
        'link' => 'index.php?page=productos&categoria=postres',
    ],
];

foreach ($categories as $category) {
    $title = $category['title'];
    $imageSrc = $category['imageSrc'];
    $altText = $category['altText'];
    $categoryLink = $category['link'];

    include 'components/molecules/menu-card.php';
}
?>
