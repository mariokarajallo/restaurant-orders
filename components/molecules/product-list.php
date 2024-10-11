<div class="flex flex-col space-y-4">
    <?php
    $productsByCategory = [
        'Pastas' => [
            'Spaghetti' => [
                ['name' => 'Spaghetti Bolognese', 'description' => 'Spaghetti con salsa bolognese', 'image' => 'spaghetti.png', 'customizable' => true],
                ['name' => 'Spaghetti Carbonara', 'description' => 'Spaghetti con salsa carbonara', 'image' => 'spaghetti-carbonara.png', 'customizable' => true]
            ],
            'Fettuccine' => [
                ['name' => 'Fettuccine Alfredo', 'description' => 'Fettuccine con salsa Alfredo', 'image' => 'fettuccine.png', 'customizable' => false]
            ],
            // Otros productos...
        ],
        // Otras categorías...
    ];

    $category = isset($_GET['category']) ? $_GET['category'] : 'Pizzas';
    $subcategory = isset($_GET['subcategory']) ? $_GET['subcategory'] : 'all';

    if ($subcategory === 'all') {
        $products = [];
        foreach ($productsByCategory[$category] as $subcatProducts) {
            $products = array_merge($products, $subcatProducts);
        }
    } elseif (isset($productsByCategory[$category][$subcategory])) {
        $products = $productsByCategory[$category][$subcategory];
    } else {
        $products = [];
    }

    if (count($products) > 0) {
        foreach ($products as $index => $product) {
            $isCustomizable = $product['customizable'] ? 'true' : 'false';

            echo "
            <div class='product-card w-[450px] h-auto border border-gray-300 rounded-2xl p-4 bg-white space-x-4 hover:shadow-lg'>
                <div class='flex items-center justify-between space-x-6'>
                    <img src='/public/assets/products/{$product['image']}' alt='{$product['name']}' class='w-20 h-20 object-cover rounded-lg'>
                    <div class='space-y-2'>
                        <h3 class='product-name text-lg font-semibold'>{$product['name']}</h3>
                        <p class='text-sm text-gray-500'>{$product['description']}</p>
                    </div>
                    <div class='flex items-center justify-center'>
                        <button class='bg-yellow-400 rounded-full transform transition-transform duration-200 hover:scale-105 open-modal-btn' data-customizable='{$isCustomizable}' data-product-name='{$product['name']}' data-product-price='45000'>
                            <svg class='h-10 w-10 text-gray-500' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                                <path stroke='none' d='M0 0h24v24H0z'/>
                                <line x1='9' y1='12' x2='15' y2='12'/>
                                <line x1='12' y1='9' x2='12' y2='15'/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>";
        }
    } else {
        echo "<p>No hay productos disponibles para esta subcategoría.</p>";
    }
    ?>
</div>
