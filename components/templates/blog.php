<div class="container mx-auto space-y-8">
    <h1 class="text-3xl md:text-4xl font-bold">Desde Nuestra Cocina</h1>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <!-- Columna de noticias principales -->
        <div class="col-span-2">
            <?php include 'components/organisms/top-news.php'; ?>
        </div>
        <!-- Columna de noticia destacada -->
        <div class="col-span-2">
            <?php include 'components/organisms/featured-news.php'; ?>
        </div>
    </div>
    <!-- Noticias secundarias -->
    <div class="">
        <?php include 'components/organisms/secondary-news.php'; ?>
    </div>
</div>
