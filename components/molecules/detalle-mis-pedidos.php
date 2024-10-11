<?php
function detallesModal() {
    echo "
    <div id='detallesModal' class='fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden'>
        <div class='bg-white rounded-2xl shadow-lg w-full p-6 md:p-8 max-w-3xl h-[80vh] overflow-y-auto'>
            <!-- Boton de cerrar -->
            <div class='flex justify-end'>
            <button class='text-gray-500 hover:text-gray-700' onclick='closeModal()'>".
            renderIcon('close')."
            </button>
            </div>

            <div class='space-y-6'>
                <!-- Header del Modal -->
                <div class='flex justify-between items-center py-4'>
                    <h3 class='text-2xl font-bold text-gray-700'>Bellini Encarnación</h3>
                    <p class='text-gray-500'>mie 15 abril, 22:22 hs</p>
                </div>

                <!-- Sección Pedido (Acordeón) -->
                <div>
                    <button class='w-full flex justify-between items-center text-left focus:outline-none border-b border-gray-200 pb-2' onclick='toggleSection(\"pedido\", \"icon-pedido\");'>
                        <h4 class='text-lg font-bold text-gray-700'>Pedido</h4>
                        <span id='icon-pedido' class='text-gray-500'>
                            ".renderIcon('chevron-down')."
                            ".renderIcon('chevron-up')."
                        </span>
                    </button>
                    <div id='pedido' class='hidden mt-4 grid grid-cols-12 gap-4'>
                        <img src='/public/assets/images/fav-1.png' alt='Producto' class='col-span-2 w-16 h-16 rounded-lg'>
                        <div class='col-span-8'>
                            <h5 class='font-bold text-gray-800'>Caserecce</h5>
                            <p class='text-sm text-gray-500'>Aceituna verde x 2, Aji x 3, Ajo x2, Bolognesa, Queso Rallado</p>
                        </div>
                        <div class='col-span-2'>
                            <h5 class='font-bold text-gray-800'>Cantidad</h5>
                            <p class='text-sm text-gray-500'>1</p>
                        </div>
                    </div>
                </div>

                <!-- Sección Total (Acordeón) -->
                <div>
                    <button class='w-full flex justify-between items-center text-left focus:outline-none border-b border-gray-200 pb-2' onclick='toggleSection(\"total\", \"icon-total\");'>
                        <h4 class='text-lg font-bold text-gray-700'>Total</h4>
                        <span id='icon-total' class='text-gray-500'>
                            ".renderIcon('chevron-down')."
                            ".renderIcon('chevron-up')."
                        </span>
                    </button>
                    <div id='total' class='hidden mt-4 space-y-4'>
                        <div class='flex space-x-2'>
                            <h5 class='font-bold text-gray-800'>Producto:</h5>
                            <p class='text-base text-gray-500'>Gs. 45.000</p>
                        </div>

                        <div class='flex space-x-2'>
                            <h5 class='font-bold text-gray-800'>Envio:</h5>
                            <p class='text-base text-gray-500'>Gs. 15.000</p>
                        </div>

                        <div class='flex space-x-2'>
                            <h5 class='font-bold text-gray-800'>Total:</h5>
                            <p class='text-base text-gray-500'>Gs. 60.000</p>
                        </div>
                    </div>
                </div>

                <!-- Sección Medios de Pago (Acordeón) -->
                <div>
                    <button class='w-full flex justify-between items-center text-left focus:outline-none border-b border-gray-200 pb-2' onclick='toggleSection(\"medios-pago\", \"icon-medios-pago\");'>
                        <h4 class='text-lg font-bold text-gray-700'>Medios de Pago</h4>
                        <span id='icon-medios-pago' class='text-gray-500'>
                            ".renderIcon('chevron-down')."
                            ".renderIcon('chevron-up')."
                        </span>
                    </button>
                    <div id='medios-pago' class='hidden mt-4'>
                        <div class='flex space-x-2'>
                            <h5 class='font-bold text-gray-800'>Débito:</h5>
                            <p class='text-base text-gray-500'> **** **** **** 1234</p>
                        </div>
                    </div>
                </div>

                <!-- Sección Detalles de Entrega (Acordeón) -->
                <div>
                    <button class='w-full flex justify-between items-center text-left focus:outline-none border-b border-gray-200 pb-2' onclick='toggleSection(\"detalles-entrega\", \"icon-detalles-entrega\");'>
                        <h4 class='text-lg font-bold text-gray-700'>Detalles de Entrega</h4>
                        <span id='icon-detalles-entrega' class='text-gray-500'>
                            ".renderIcon('chevron-down')."
                            ".renderIcon('chevron-up')."
                        </span>
                    </button>
                    <div id='detalles-entrega' class='hidden mt-4 space-y-4'>
                        <div class='flex space-x-2'>
                            <h5 class='font-bold text-gray-800'>Tipo de Entrega:</h5>
                            <p class='text-base text-gray-500'>Delivery</p>
                        </div>
                        <div class='flex space-x-2'>
                            <h5 class='font-bold text-gray-800'>Dirección:</h5>
                            <p class='text-base text-gray-500'> Avd. Carlos Antonio Lopez 4567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('detallesModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('detallesModal').classList.add('hidden');
        }

        function toggleSection(section, iconId) {
            const content = document.getElementById(section);
            const icons = document.querySelectorAll('#' + iconId + ' .chevron-icon');
            
            content.classList.toggle('hidden');
            
            // Cambiar entre los íconos chevron-up y chevron-down
            icons.forEach(icon => {
                icon.classList.toggle('hidden');
            });
        }
    </script>";
}
?>
