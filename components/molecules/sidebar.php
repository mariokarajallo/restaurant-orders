<div class="space-y-4">
    <?php
    $category = isset($_GET['category']) ? $_GET['category'] : 'Pizzas'; // Categoría por defecto
    $currentSubcategory = isset($_GET['subcategory']) ? $_GET['subcategory'] : 'all'; // Subcategoría por defecto es "all" (todos)

    // Datos de ejemplo por categoría
    $sidebarItemsByCategory = [
        'Pastas' => ['Spaghetti', 'Fettuccine', 'Lasagna', 'Ravioli'],
        'Lasagnas' => ['Clásica', 'Vegetariana', 'De Carne', 'De Pollo'],
        'Pizzas' => ['Medianas', 'A tu gusto', 'Lo más vendido', 'Promociones'],
        'Ensaladas' => ['César', 'Griega', 'Mixta', 'Caprese'],
        'Bebidas' => ['Con Alcohol', 'Sin Alcohol', 'Promociones'],
        'Postres' => ['Helados', 'Tortas', 'Dulces', 'Saludables'],
    ];

    // Mostrar la opción "TODOS" y verificar si es activa
    $isActive = ($currentSubcategory === 'all') ? 'text-r300' : 'text-gray-400 hover:text-gray-700';
    echo "<a href='/index.php?page=productos&category=$category&subcategory=all' class='block px-4 py-2 $isActive rounded-md'>Todos</a>";

    // Obtener los elementos del sidebar según la categoría seleccionada
    $sidebarItems = $sidebarItemsByCategory[$category];

    // Mostrar las subcategorías y verificar cuál es activa
    foreach ($sidebarItems as $item) {
        $isActive = ($currentSubcategory === $item) ? 'text-r300' : 'text-gray-400 hover:text-gray-700';
        echo "<a href='/index.php?page=productos&category=$category&subcategory=".urlencode($item)."' class='block px-4 py-2 $isActive rounded-md'>$item</a>";
    }
    ?>
</div>
