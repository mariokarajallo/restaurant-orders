<?php
include 'components/molecules/history-block.php';
include 'components/molecules/values-block.php';

function about_section() {
  echo "<section class='about-section py-8 space-y-8'>";
    history_block();
    values_block();
  echo "</section>";
      
}
?>
