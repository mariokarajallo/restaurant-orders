<div class="flex flex-col space-y-4">
    <?php
    // Datos de ejemplo de productos por categoría y subcategoría
    $productsByCategory = [
        'Pastas' => [
            'Spaghetti' => [
                ['name' => 'Spaghetti Bolognese', 'description' => 'Spaghetti con salsa bolognese', 'image' => 'spaghetti.png'],
                ['name' => 'Spaghetti Carbonara', 'description' => 'Spaghetti con salsa carbonara', 'image' => 'spaghetti-carbonara.png']
            ],
            'Fettuccine' => [
                ['name' => 'Fettuccine Alfredo', 'description' => 'Fettuccine con salsa Alfredo', 'image' => 'fettuccine.png']
            ],
            // Otros subcategorías de pastas...
        ],
        'Lasagnas' => [
            'Clásica' => [
                ['name' => 'Lasagna Clásica', 'description' => 'Lasagna tradicional con carne', 'image' => 'lasagna.png']
            ],
            'Vegetariana' => [
                ['name' => 'Lasagna Vegetariana', 'description' => 'Lasagna con vegetales', 'image' => 'lasagna-veggie.png']
            ],
            // Otros subcategorías de lasagnas...
        ],
        'Pizzas' => [
            'Medianas' => [
                ['name' => 'Pizza personal (6 porciones)', 'description' => 'Pizza de 6 porciones', 'image' => 'pizza.png']
            ],
            'A tu gusto' => [
                ['name' => 'Pizza a tu gusto', 'description' => 'Pizza personalizada', 'image' => 'pizza-gusto.png']
            ],
            // Otros subcategorías de pizzas...
        ],
        'Ensaladas' => [
            'César' => [
                ['name' => 'Ensalada César', 'description' => 'Ensalada con pollo', 'image' => 'ensalada-cesar.png'],
                ['name' => 'Ensalada de palta', 'description' => 'Ensalada con palta', 'image' => 'ensalada-palta.png']
            ],
            'Griega' => [
                ['name' => 'Ensalada Griega', 'description' => 'Ensalada con queso feta', 'image' => 'ensalada-griega.png'],
                ['name' => 'Ensalada de tomate', 'description' => 'Ensalada con tomate', 'image' => 'ensalada-tomate.png']
            ],
            'Mixta' => [
                ['name' => 'Ensalada Mixta', 'description' => 'Ensalada con jamón y queso', 'image' => 'ensalada-mixta.png'],
                ['name' => 'Ensalada de atún', 'description' => 'Ensalada con atún', 'image' => 'ensalada-atun.png']
            ],
            
        ],
        'Bebidas' => [
            'Con Alcohol' => [
                ['name' => 'Cerveza', 'description' => 'Cerveza artesanal', 'image' => 'cerveza.png'],
                ['name' => 'Vino', 'description' => 'Vino tinto o blanco', 'image' => 'vino.png']
            ],
            'Sin Alcohol' => [
                ['name' => 'Gaseosa', 'description' => 'Gaseosa de 2 litros', 'image' => 'gaseosa.png'],
                ['name' => 'Agua', 'description' => 'Agua mineral', 'image' => 'agua.png']
            ],
            'Promociones' => [
                ['name' => 'Combo de bebidas', 'description' => 'Combo de bebidas', 'image' => 'combo-bebidas.png'],
                ['name' => 'Jugos', 'description' => 'Jugos naturales', 'image' => 'jugos.png']
            ],
        ],
        'Postres' => [
            'Helados' => [
                ['name' => 'Helado de vainilla', 'description' => 'Helado de vainilla', 'image' => 'helado-vainilla.png']
            ],
            'Tortas' => [
                ['name' => 'Torta de chocolate', 'description' => 'Torta de chocolate', 'image' => 'torta-chocolate.png']
            ],
            'Dulces' => [
                ['name' => 'Alfajores', 'description' => 'Alfajores de maicena', 'image' => 'alfajores.png']
            ],
            'Saludables' => [
                ['name' => 'Frutas', 'description' => 'Frutas frescas', 'image' => 'frutas.png'],
                ['name' => 'Yogurt', 'description' => 'Yogurt natural', 'image' => 'yogurt.png']

            ],

        ],
    ];

     // Obtener la categoría y subcategoría de la URL
     $category = isset($_GET['category']) ? $_GET['category'] : 'Pizzas'; // Categoría por defecto
     $subcategory = isset($_GET['subcategory']) ? $_GET['subcategory'] : 'all'; // Si no se especifica, mostrar "all"
 
     // Obtener los productos según la categoría y subcategoría
     if ($subcategory === 'all') {
         // Si la subcategoría es "all", mostrar todos los productos de la categoría
         $products = [];
         foreach ($productsByCategory[$category] as $subcatProducts) {
             $products = array_merge($products, $subcatProducts); // Combinar todos los productos de todas las subcategorías
         }
     } elseif (isset($productsByCategory[$category][$subcategory])) {
         // Mostrar solo los productos de la subcategoría seleccionada
         $products = $productsByCategory[$category][$subcategory];
     } else {
         $products = []; // Si no hay productos, devolver un array vacío
     }
 
     // Mostrar los productos filtrados por categoría y subcategoría
     if (count($products) > 0) {
         foreach ($products as $product) {
             echo "
             <div class='product-card w-[450px] h-auto border border-gray-300 rounded-2xl p-4 bg-white space-x-4 hover:shadow-lg'>
                 <div class='flex items-center justify-between space-x-6'>
                     <img src='/public/assets/products/{$product['image']}' alt='{$product['name']}' class='w-20 h-20 object-cover rounded-lg'>
                     <div class='space-y-2'>
                         <h3 class='product-name text-lg font-semibold'>{$product['name']}</h3>
                         <p class='text-sm text-gray-500'>{$product['description']}</p>
                     </div>
                     <div class='flex items-center justify-center'>
                         <button class='bg-yellow-400 rounded-full transform transition-transform duration-200 hover:scale-105'>
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

 