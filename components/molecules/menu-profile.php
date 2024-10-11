<?php
include 'components/atoms/menu-item-lateral.php';

// Función para obtener el título del menú basado en la sección activa
function getMenuTitle($activeSection) {
    switch ($activeSection) {
        case 'datos-personales':
            return 'Datos Personales';
        case 'facturacion':
            return 'Datos de Facturación';
        case 'direcciones':
            return 'Mis Direcciones';
        case 'pedidos':
            return 'Mis Pedidos';
        default:
            return 'Sección Desconocida';  // Mejor manejo de casos no previstos
    }
}

function menuProfile($activeSection) {
    // Obtener el título del menú basado en la sección activa
    $menuTitle = getMenuTitle($activeSection);

    echo "<nav class='space-y-4'>";
        // Generación dinámica de los ítems del menú con las secciones disponibles
        menuItem('Datos Personales', '?page=perfil&section=datos-personales', $activeSection === 'datos-personales');
        menuItem('Datos de Facturación', '?page=perfil&section=facturacion', $activeSection === 'facturacion');
        menuItem('Mis Direcciones', '?page=perfil&section=direcciones', $activeSection === 'direcciones');
        menuItem('Mis Pedidos', '?page=perfil&section=pedidos', $activeSection === 'pedidos');
    echo "</nav>";
}
?>
