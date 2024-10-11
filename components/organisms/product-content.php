<div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4 space-y-4">
    
    <!-- Barra de categorías -->
    <div class="col-span-4">
        <?php include 'components/molecules/menu-category-bar.php'; ?>
    </div>

    <!-- Barra de búsqueda -->
    <div class=" col-start-2 col-span-2">
        <?php include 'components/atoms/search-bar.php'; ?>
    </div>

    <!-- Barra lateral (sub-categorías) -->
    <div class="col-start-1 col-span-1">
        <?php include 'components/molecules/sidebar.php'; ?>
    </div>

    <!-- Lista de productos -->
    <div class="col-span-2 flex justify-center">
        <?php include 'components/molecules/product-list.php'; ?>
    </div>

</div>

