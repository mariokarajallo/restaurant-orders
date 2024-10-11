<?php
include_once 'components/atoms/icon.php';
include_once 'components/molecules/detalle-mis-pedidos.php';  // Incluir el modal como molécula

function misPedidos() {
    echo "
    <div class='container mx-auto'>
        <h2 class='text-xl font-bold mb-4'>Mis Pedidos</h2>
        <div class='space-y-4'>";
    
    for ($i = 0; $i < 3; $i++) {
        echo "
        <div class='bg-[#fef3f3] p-4 rounded-2xl grid grid-cols-12 items-stretch w-1/2 h-32'>
            <div class='col-span-2 flex flex-col justify-center'>
                <img src='/public/assets/images/fav-1.png' alt='Producto' class='w-16 h-16 rounded-lg'>
            </div>
            <div class='col-span-4 h-full flex flex-col justify-between'>
                <div>
                    <h3 class='text-sm text-gray-500'>Bellini Encarnación</h3>
                    <p class='font-bold text-base text-gray-500'>Gs. 45.000</p>
                </div>
                <button class='text-r300 hover:text-r400 flex items-center space-x-2' id='verDetallesBtn' onclick='openModal()'>
                    ".renderIcon('details')."
                    <span>Ver detalles</span>
                </button>
            </div>
            <div class='col-span-6 h-full flex flex-col justify-between'>
                <p class='text-sm text-gray-500 text-end'>mie 15 abril, 22:22 hs</p>
                <div class='flex space-x-2 justify-end'>
                    <button class='text-gray-500 hover:text-gray-600 flex items-center space-x-1'>
                        ".renderIcon('favorite')."
                        <span class='text-xs'>Agregar Favorito</span>
                    </button>
                    <button class='text-gray-500 hover:text-gray-600 flex items-center space-x-1'>
                        ".renderIcon('repeat')."
                        <span class='text-xs'>Repetir</span>
                    </button>
                </div>
            </div>
        </div>";
    }

    echo "
        </div>
    </div>";

    // Llama al modal aquí
    detallesModal();
}
?>
