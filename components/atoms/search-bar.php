<div class="relative">
    <!-- Campo de búsqueda -->
    <input 
        type="text" 
        id="searchInput" 
        class="w-full border border-r300 rounded-full px-8 py-3 focus:outline-none focus:ring-2 focus:ring-r300" 
        placeholder="Buscar productos..." 
        oninput="filterProducts()"
    >
    
    <!-- Icono de búsqueda (lupa) -->
    <button class="absolute right-14 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-red-500">
        <?php
            include_once 'components/atoms/icon.php';
            echo "".renderIcon('search','h-5 w-5 text-r400')."";
        ?>
    </button>
    
    <!-- Icono de limpieza (X) -->
    <button 
        id="clearSearch" 
        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-red-500 hidden" 
        onclick="clearSearchInput()">
        <?php
            include_once 'components/atoms/icon.php';
            echo "".renderIcon('close','h-5 w-5 text-r400');  // Icono de "X" para limpiar
        ?>
    </button>
</div>
