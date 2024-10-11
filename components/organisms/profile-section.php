<?php
include 'components/molecules/menu-profile.php';
include 'components/molecules/form-personal-data.php';
include 'components/molecules/form-facturacion.php';
include 'components/molecules/mis-direcciones.php';
include 'components/molecules/mis-pedidos.php';
include 'components/molecules/promociones.php';

function profileSection($username, $activeSection)
{
    echo "
    <section class='container mx-auto flex flex-col space-y-4'>
    <!-- Saludo Usuario -->
    <div class='w-full'>
    <h1 class='text-3xl font-bold'>Hola <span class='text-r300'>$username</span></h1>    
    </div>
    
    <!-- Menú lateral -->
        <div class='grid grid-cols-12'>
        <div class='col-span-3' >";
    menuProfile($activeSection);
    echo "
    </div>
    

        <!-- Contenido del perfil -->
        <div class='col-span-9'>";
    // Lógica para mostrar la sección correcta
    switch ($activeSection) {
        case 'datos-personales':
            formPersonalData();
            break;
        case 'facturacion':
            formFacturacion();
            break;
        case 'direcciones':
            misDirecciones();
            break;
        case 'pedidos':
            misPedidos();
            break;
        default:
            formPersonalData();  // Si no se encuentra una sección válida, carga 'Datos Personales' por defecto
            break;
    }
    echo "
            </div>
            </div>
        </div>
    </section>";
}
