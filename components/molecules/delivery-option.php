<?php
include 'components/atoms/input.php';
include 'components/atoms/button.php';

echo '
<form class="space-y-4">';
    inputField("Dirección");
    inputField("Numero de casa");
    inputField("Referencia");
echo '
  <div class="w-full h-64 bg-gray-200 flex items-center justify-center rounded-2xl">
    <span class="text-gray-500">Mapa de ubicaciónes</span>
  </div>

  <div class="text-end">';
   button("Continuar");
echo '
  </div>
</form>
';
?>;
