<?php
include_once "components/atoms/icon.php";
include "components/organisms/contact-form.php";

// Array de Sucursales Nacionales
$sucursales_nacionales = [
    [
        'nombre' => 'Bellini Encarnación',
        'direccion' => 'Calle San Jose esq. Troche, 1455',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_1',  // Enlace del iframe de Google Maps
        'telefono' => '0985 123 456',
        'email' => 'encarnacion@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],
    [
        'nombre' => 'Bellini Encarnación',
        'direccion' => 'Calle San Jose esq. Troche, 1455',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_1',  // Enlace del iframe de Google Maps
        'telefono' => '0985 123 456',
        'email' => 'encarnacion@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],
    [
        'nombre' => 'Bellini Encarnación',
        'direccion' => 'Calle San Jose esq. Troche, 1455',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_1',  // Enlace del iframe de Google Maps
        'telefono' => '0985 123 456',
        'email' => 'encarnacion@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],
    [
        'nombre' => 'Bellini Encarnación',
        'direccion' => 'Calle San Jose esq. Troche, 1455',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_1',  // Enlace del iframe de Google Maps
        'telefono' => '0985 123 456',
        'email' => 'encarnacion@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],
    [
        'nombre' => 'Bellini Encarnación',
        'direccion' => 'Calle San Jose esq. Troche, 1455',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_1',  // Enlace del iframe de Google Maps
        'telefono' => '0985 123 456',
        'email' => 'encarnacion@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],


];

// Array de Franquicias
$franquicias = [
    [
        'nombre' => 'Franquicia Bellini Ciudad del Este',
        'direccion' => 'Avenida Costanera, 450',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_3',
        'telefono' => '0985 789 012',
        'email' => 'ciudaddeleste@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],
    // Agrega más franquicias aquí
];

// Array de Sucursales Internacionales
$sucursales_internacionales = [
    [
        'nombre' => 'Bellini Buenos Aires',
        'direccion' => 'Calle Florida, 123',
        'mapa_url' => 'https://www.google.com/maps/embed?pb=ENLACE_IFRAME_5',
        'telefono' => '+54 11 4567 890',
        'email' => 'buenosaires@bellini.com',
        'horarios' => [
            'Lunes a Viernes' => '12:00 - 19:00',
            'Sabados' => '12:00 - 19:00',
            'Domingos' => '12:00 - 17:00',
        ]
    ],
    // Agrega más sucursales internacionales aquí
];
?>

<div class="container mx-auto space-y-4">
    <div class="space-y-4">
        <!-- Título principal -->
        <h2 class="text-3xl font-bold mb-4">Sucursales</h2>
        <!-- Párrafo de descripción -->
        <p class="text-base">
            Visítanos en cualquiera de nuestras ubicaciones y disfruta de la auténtica experiencia culinaria con la pasta como a vos te gusta. Encuentra la sucursal más cercana y contáctanos directamente.
        </p>
    </div>

    <!-- ========== SUCURSALES NACIONALES ========== -->
    <section class="">
        <button class="accordion-toggle flex justify-between items-center w-full text-left py-2 px-4 bg-r300 rounded-lg text-white">
            <span class="text-xl font-semibold">Sucursales Nacionales</span>
            <!-- Ícono que indica expandido o colapsado -->
            <?php echo renderIcon('chevron-right', 'w-6 h-6 transition-transform duration-300 transform') ?>
        </button>
        <!-- Contenido del acordeón que se despliega -->
        <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out space-y-4">
            <?php
            $sucursales = $sucursales_nacionales;
            include 'components/organisms/location-section.php';
            ?>
        </div>
    </section>

    <!-- ========== FRANQUICIAS ========== -->
    <section class="">
        <button class="accordion-toggle flex justify-between items-center w-full text-left py-2 px-4 bg-r300 rounded-lg text-white">
            <span class="text-xl font-semibold">Franquicias</span>
            <?php echo renderIcon('chevron-right', 'w-6 h-6 transition-transform duration-300 transform') ?>
        </button>
        <!-- Contenido del acordeón que se despliega -->

        <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out space-y-4">
            <?php
            $sucursales = $franquicias;
            include 'components/organisms/location-section.php';
            ?>
        </div>
    </section>

    <!-- ========== SUCURSALES INTERNACIONALES ========== -->
    <section class="">
        <button class="accordion-toggle flex justify-between items-center w-full text-left py-2 px-4 bg-r300 rounded-lg text-white">
            <span class="text-xl font-semibold">Internacionales</span>

            <?php echo renderIcon('chevron-right', 'w-6 h-6 transition-transform duration-300 transform') ?>

        </button>
        <!-- Contenido del acordeón que se despliega -->

        <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out space-y-4">
            <?php
            $sucursales = $sucursales_internacionales;
            include 'components/organisms/location-section.php';
            ?>
        </div>
    </section>

    <!-- FORMULARIO DE CONTACTO -->
     <section class="pt-8 md:flex md:justify-center">
        <?php contactForm(); ?>
     </section>
</div>

<!-- Script para controlar el acordeón -->
<script>
    document.querySelectorAll('.accordion-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            // Desplegar/colapsar el contenido
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }

            // Rotar el ícono cuando se expande o colapsa
            icon.classList.toggle('rotate-90');
        });
    });
</script>