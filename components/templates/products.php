<div class="container mx-auto">

<!-- Incluir la lista de productos -->
<?php include 'components/organisms/product-content.php'; ?>

<!-- Incluir el modal de personalización de productos -->
<?php include 'components/molecules/modal-product.php'; ?>

</div>

<!-- Colocar el script modal.js aquí antes del cierre del body -->
<script src="/public/js/modal.js"></script>

<script>
    // Función para filtrar los productos en tiempo real
    function filterProducts() {
        const searchInput = document.getElementById("searchInput").value.toLowerCase(); // Capturar el valor del input
        const productCards = document.querySelectorAll(".product-card"); // Seleccionar todas las tarjetas de productos
        const clearIcon = document.getElementById("clearSearch"); // Icono de limpieza

        // Mostrar el icono de limpieza solo si hay texto en el input
        if (searchInput.length > 0) {
            clearIcon.classList.remove("hidden");
        } else {
            clearIcon.classList.add("hidden");
        }

        // Iterar sobre cada tarjeta de producto
        productCards.forEach(card => {
            const productName = card.querySelector(".product-name").textContent.toLowerCase(); // Obtener el nombre del producto
            if (productName.includes(searchInput)) {
                card.style.display = "block"; // Mostrar productos que coinciden
            } else {
                card.style.display = "none"; // Ocultar productos que no coinciden
            }
        });
    }

    // Función para limpiar el campo de búsqueda y mostrar todos los productos
    function clearSearchInput() {
        const searchInput = document.getElementById("searchInput");
        searchInput.value = "";  // Limpiar el texto del input
        filterProducts();  // Llamar al filtro para mostrar todos los productos
        document.getElementById("clearSearch").classList.add("hidden"); // Ocultar el icono de limpieza
    }

    // Escuchar el evento de entrada en el campo de búsqueda para activar la función de filtrado
    document.getElementById("searchInput").addEventListener("input", filterProducts);
</script>



