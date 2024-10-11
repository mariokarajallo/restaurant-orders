<div class="space-y-4 pt-4">
    <div class="flex space-x-4">
        <!-- Botón Entrega a domicilio -->
        <button id="domicilioBtn" class="text-center text-black px-4 py-3 text-base rounded flex items-center space-x-2 ">
            <div id="domicilioIcon" class="text-black fill-current stroke-current stroke-0">
            <?php 
                include_once 'components/atoms/icon.php'; 
                echo ''.renderIcon('delivery',' w-10 h-10').'';
            ?>
            </div>
            <span>Entrega a domicilio</span>    
        </button>
        
        <!-- Botón Recoger en tienda -->
        <button id="tiendaBtn" class="text-center text-black px-4 py-3 rounded text-base flex items-center space-x-2 ">
            <div id="tiendaIcon" class="text-black fill-current stroke-current stroke-0">
            <?php 
                include_once 'components/atoms/icon.php'; 
                echo ''.renderIcon('pickup','w-10 h-10 ').'';
            ?>
            </div>
            <span>Recoger en tienda</span>    
        </button>
    </div>


  <div id="domicilioForm" class="hidden">
    <?php include 'components/molecules/delivery-option.php'; ?>
  </div>

  <div id="tiendaOptions" class="hidden">
    <?php include 'components/molecules/pickup-option.php'; ?>
  </div>
</div>

<script>
  const domicilioBtn = document.getElementById('domicilioBtn');
  const domicilioIcon = document.getElementById('domicilioIcon');
  const tiendaBtn = document.getElementById('tiendaBtn');
  const tiendaIcon = document.getElementById('tiendaIcon');
  const domicilioForm = document.getElementById('domicilioForm');
  const tiendaOptions = document.getElementById('tiendaOptions');

  domicilioBtn.addEventListener('click', () => {
    domicilioForm.classList.remove('hidden');
    domicilioBtn.classList.add('font-bold');
    domicilioIcon.classList.add('stroke-1');
    domicilioIcon.classList.remove('stroke-0');
    tiendaOptions.classList.add('hidden');
    tiendaBtn.classList.remove('font-bold');
    tiendaIcon.classList.remove('stroke-1');
    tiendaIcon.classList.add('stroke-0');
  });

  tiendaBtn.addEventListener('click', () => {
    tiendaOptions.classList.remove('hidden');
    tiendaBtn.classList.add('font-bold');
    tiendaIcon.classList.add('stroke-1');
    tiendaIcon.classList.remove('stroke-0');
    domicilioForm.classList.add('hidden');
    domicilioBtn.classList.remove('font-bold');
    domicilioIcon.classList.remove('stroke-1');
    domicilioIcon.classList.add('stroke-0');
  });
</script>
