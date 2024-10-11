<?php
include_once 'components/atoms/icon.php';
?>
<div class="accordion-item border-b">
    <button class="accordion-header w-full flex justify-between items-center py-4" onclick="toggleAccordion(this)">
        <span class="text-xl text-left font-semibold"><?php echo $title; ?></span>
        <?php echo renderIcon('chevron-right', 'w-6 h-6 transition-transform duration-300 transform'); ?>
    </button>
    <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="py-4 text-base text-gray-600">
            <?php echo $content; ?>
        </div>
    </div>
</div>

<script>
    function toggleAccordion(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector('svg');

        // Alternar el despliegue del contenido
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

        // Rotar el icono al expandir o colapsar
        icon.classList.toggle('rotate-90');
    }
</script>