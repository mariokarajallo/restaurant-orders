<div id="modalProduct" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white w-full max-w-3xl rounded-lg shadow-lg p-8 relative flex">
        <!-- Botón para cerrar el modal -->
        <button id="closeModalProduct" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Primera columna: Selección de ingredientes, salsas y extras -->
        <div class="w-1/2 pr-4 h-[400px] overflow-y-auto">
            <h2 class="text-2xl font-semibold mb-4">Personaliza tu pedido:</h2>
            <div class="space-y-4">
                <!-- Ingredientes -->
                <div>
                    <!-- Botón para expandir el acordeón de Ingredientes -->
                    <button class="w-full text-left font-semibold text-lg" onclick="toggleAccordion('accordionIngredients')">
                        Ingredientes
                    </button>

                    <!-- Contenido del acordeón de Ingredientes -->
                    <div id="accordionIngredients" class="hidden mt-2 space-y-6">
                        <!-- INGREDIENTES SIMPLES -->
                        <div>
                            <h3 class="text-xs font-semibold text-gray-400">Escoge entre 1 y 8 opciones</h3>
                            <div class="mt-2 space-y-2">

                                <!-- INGREDIENTE 1 -->

                                <div class="ingredient-container flex space-x-4 items-center" data-ingredient="aceitunaNegra">
                                    <img src="/path/to/image.png" alt="Aceituna Negra" class="ingredient-img w-10 h-10 object-cover rounded-full border-2 border-gray-400">
                                    <div class="flex justify-between items-center border-2 border-gray-400 rounded-2xl p-2 w-full">
                                        <span class="text-base font-semibold">Aceituna Negra</span>
                                        <div class="flex items-center space-x-4">
                                            <button onclick="decreaseIngredient('aceitunaNegra', 8)" class="bg-yellow-500 text-black p-2 rounded-full w-6 h-6 flex justify-center items-center">-</button>
                                            <span class="ingredient-count text-lg font-semibold">0</span>
                                            <button onclick="increaseIngredient('aceitunaNegra', 8)" class="bg-yellow-500 text-black p-2 rounded-full w-6 h-6 flex justify-center items-center">+</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- INGREDIENTE 2 -->
                                <div class="ingredient-container flex space-x-4 items-center" data-ingredient="aceitunaVerde">
                                    <img src="/public/assets/products/aceituna-verde.png" alt="Aceituna Verde" class="ingredient-img w-10 h-10 object-cover rounded-full border-2 border-gray-400">
                                    <div class="flex justify-between items-center border-2 border-gray-400 rounded-2xl p-2 w-full">
                                        <label class="text-sm font-semibold">Aceituna Verde</label>
                                        <div class="flex items-center space-x-4">
                                            <button onclick="decreaseIngredient('aceitunaVerde', 8)" class="bg-yellow-500 text-black p-2 rounded-full w-6 h-6 flex justify-center items-center">-</button>
                                            <span class="ingredient-count text-lg font-semibold">0</span>
                                            <button onclick="increaseIngredient('aceitunaVerde', 8)" class="bg-yellow-500 text-black p-2 rounded-full w-6 h-6 flex justify-center items-center">+</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Añadir más ingredientes simples si es necesario -->
                            </div>
                        </div>

                        <!-- INGREDIENTES PREMIUM -->
                        <div>
                            <div class="flex space-x-2 items-center mb-4">
                                <img src="/public/assets/icons/crown.svg" alt="Crow" class="w-6 h-6 object-cover">
                                <h3 class="text-sm font-semibold">Premium</h3>
                                <span class="text-xs font-semibold text-gray-400">(solo puedes elegir 1)</span>
                            </div>

                            <!-- INGREDIENTES PREMIUM -->

                            <div class="space-y-2">
                                <!-- Camarones -->
                                <div class="flex items-center space-x-4 cursor-pointer premium-item h-14" data-ingredient="camaron" onclick="selectPremium('camaron', 10000)">
                                    <img src="/public/assets/products/camaron.png" alt="Camaron" class="premium-img w-12 h-12 object-cover rounded-full border-2 border-gray-400">
                                    <div class="flex justify-between items-center border-2 border-gray-400 rounded-2xl p-2 w-full">
                                        <span class="text-base font-semibold">Camarones (100g)</span>
                                        <div class="premium-check bg-gray-200 rounded-full p-2 w-8 h-8 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-full text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mix de Mariscos -->
                                <div class="flex items-center space-x-4 cursor-pointer premium-item h-14" data-ingredient="mix-mariscos" onclick="selectPremium('mix-mariscos', 15000)">
                                    <img src="/public/assets/products/mix-mariscos.png" alt="Mix de mariscos" class="premium-img w-12 h-12 object-cover rounded-full border-2 border-gray-400">
                                    <div class="flex justify-between items-center border-2 border-gray-400 rounded-2xl p-2 w-full">
                                        <span class="text-base font-semibold">Mix de mariscos (100g)</span>
                                        <div class="premium-check bg-gray-200 rounded-full p-2 w-8 h-8 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-full text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Salmón -->
                                <div class="flex items-center space-x-4 cursor-pointer premium-item h-14" data-ingredient="salmon" onclick="selectPremium('salmon', 20000)">
                                    <img src="/public/assets/products/salmon.png" alt="Salmón" class="premium-img w-12 h-12 object-cover rounded-full border-2 border-gray-400">
                                    <div class="flex justify-between items-center border-2 border-gray-400 rounded-2xl p-2 w-full">
                                        <span class="text-base font-semibold">Salmón (100g)</span>
                                        <div class="premium-check bg-gray-200 rounded-full p-2 w-8 h-8 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-full text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Salsas -->
                <div>
                    <button class="w-full text-left font-semibold text-lg" onclick="toggleAccordion('accordionSauces')">
                        Salsas
                    </button>
                    <div id="accordionSauces" class="hidden">
                        <h3 class="text-sm font-semibold mt-2">Escoge hasta 2 salsas</h3>
                        <select id="sauceSelection" class="block w-full p-2 mt-2 border rounded-md">
                            <option value="">Selecciona una salsa</option>
                            <option value="bolognesa">Bolognesa</option>
                            <option value="mixta">Mixta (Bolognesa + Blanca)</option>
                            <option value="funghi">Funghi</option>
                            <option value="roja">Roja</option>
                            <option value="blanca">Blanca</option>
                        </select>
                        <h3 class="text-sm font-semibold mt-4">Premium (solo puedes elegir 1)</h3>
                        <select id="premiumSauce" class="block w-full p-2 mt-2 border rounded-md">
                            <option value="">Selecciona una salsa premium</option>
                            <option value="4quesos" data-price="10000">4 quesos + Gs. 10.000</option>
                        </select>
                    </div>
                </div>

                <!-- Extras -->
                <div>
                    <button class="w-full text-left font-semibold text-lg" onclick="toggleAccordion('accordionExtras')">
                        Extras
                    </button>
                    <div id="accordionExtras" class="hidden">
                        <h3 class="text-sm font-semibold mt-2">Extras</h3>
                        <div class="flex justify-between items-center mt-2">
                            <label class="text-sm">Queso rallado + Gs. 3.000</label>
                            <div class="flex items-center space-x-2">
                                <button onclick="decreaseIngredient('quesoRallado')" class="bg-gray-200 p-2 rounded-full">-</button>
                                <span id="quesoRallado-count">0</span>
                                <button onclick="increaseIngredient('quesoRallado', 1)" class="bg-gray-200 p-2 rounded-full">+</button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <label class="text-sm">Pancito</label>
                            <div class="flex items-center space-x-2">
                                <button onclick="decreaseIngredient('pancito')" class="bg-gray-200 p-2 rounded-full">-</button>
                                <span id="pancito-count">0</span>
                                <button onclick="increaseIngredient('pancito', 1)" class="bg-gray-200 p-2 rounded-full">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda columna: Resumen de ingredientes y precio total -->
        <div class="w-1/2 pl-4 flex flex-col items-center">
            <img src="/public/assets/products/casarecce.png" alt="Producto" class="modal-product-image w-32 h-32 object-cover mb-4">
            <div class="text-left flex w-full">
                <h3 class="text-lg font-semibold modal-product-name">producto</h3>
            </div>

            <!-- Lista de ingredientes seleccionados -->
            <div id="selectedIngredients" class="mt-4 w-full">
                <h4 class="mb-2">Personalizado:</h4>
                <ul id="ingredientList" class="list-disc list-inside">
                    <!-- Aquí se llenarán dinámicamente los ingredientes seleccionados -->
                </ul>
            </div>

            <!-- Contador de cantidad de productos -->
            <div class="flex items-center space-x-4 mt-4">
                <button id="decreaseQuantity" class="bg-gray-200 p-2 rounded-full w-8 h-8 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                    </svg>
                </button>
                <span id="productQuantity" class="text-lg font-semibold">1</span>
                <button id="increaseQuantity" class="bg-yellow-500 text-black p-2 rounded-full w-8 h-8 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>

            <!-- Precio total -->
            <button id="addToCartButton" class="mt-8 bg-yellow-500 text-black p-3 rounded-2xl hover:bg-yellow-600 w-full text-base font-semibold">
                Añadir 1 por Gs. 45.000
            </button>
        </div>

    </div>
</div>