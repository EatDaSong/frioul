<div class="overlay-box filtreOverlay leaflet-control leaflet-control-layers leaflet-control-layers-expanded" aria-hashpopup="true">
  <ul style="list-style: none; padding: 20px; margin-bottom: unset;">
   <?php
    foreach ($filtres as $filtre) {
        ?>
        <li style="text-align: left;"><?= $filtre ?> : <input type="checkbox" onclick="filtre('<?= $filtre ?>')" checked/></li>
        <?php
    }
    ?>
  </ul>
</div>
