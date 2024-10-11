<?php
include_once 'components/atoms/title.php';
include_once 'components/atoms/text.php';
include_once 'components/atoms/image.php';

function history_block() {
  title("2", "Nuestra Historia");
  //dos columnas
    echo "<div class='grid grid-cols-1 md:grid-cols-2 gap-6'>";
    // Columna de texto
    echo "<div class='col-span-1 flex flex-col space-y-4 text-white'>";
     
    text('Nuestro viaje comenzó en el año 2008, cuando abrimos las puertas de nuestro primer local en un centro comercial de Asunción, Paraguay. Desde el inicio, fuimos pioneros al ofrecer "pasta como vos querés", un innovador concepto que pone al cliente en el centro de la experiencia culinaria, permitiéndole personalizar cada plato según sus gustos y preferencias.');
     
     text('Los fundadores de nuestra empresa, con una vasta y profunda experiencia en el sector gastronómico, supieron combinar pasión y profesionalismo para llevar a cabo un proyecto sólido y ambicioso. El crecimiento no fue fruto del azar, sino de un trabajo arduo, dedicación y un enfoque constante en la calidad y el servicio al cliente.');

     text('En estos 15 años, hemos experimentado un crecimiento sostenido y notable, expandiendo nuestra presencia con 23 locales, entre propios y franquiciados, incluyendo cuatro establecimientos en Argentina. Cada uno de nuestros locales refleja nuestro compromiso con la excelencia y la satisfacción del cliente, lo que ha consolidado nuestra reputación como una franquicia de éxito comprobado.');

     text('A lo largo de estos años, hemos creado una comunidad de amantes de la buena pasta, y nuestro objetivo es seguir creciendo y ofreciendo experiencias culinarias memorables a más personas alrededor del mundo. Creemos en el poder de la buena comida para unir a las personas y en la importancia de adaptarse y evolucionar para satisfacer los cambiantes gustos y necesidades de nuestros clientes.');

    echo "</div>";
    
    // Columna de imagen
    echo "<div class='col-span-1 items-center'>";
     image("/public/assets/images/banner-nuestra-historia.png", "historia", "rounded-2xl");
    echo "</div>";

        
    echo "</div>";

}
?>
