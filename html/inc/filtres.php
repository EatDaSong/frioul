<div class="overlay-box filtreOverlay" >

  live : <input type="checkbox" onclick="filtreInsta()" style="text-align: left;" id="live" checked/><br>

  <?php
    $filtres = [
        'child' => 'child',
        'cocktail' => 'cocktail',
        'eye' => 'eye',
        'thumbs-up' => 'thumbs-up',
        'umbrella-beach' => 'umbrella-beach',
        'swimmer' => 'swimmer',
        'futbol' => 'futbol',
        'fish' => 'fish',
        'kiwi-bird' => 'kiwi-bird',
        'smile' => 'smile',
        'camera' => 'camera',
        'question' => 'question'
    ];

    foreach ($filtres as $filtre) {
        ?>
        <li style="list-style: none; text-align: left; padding-left: 25px;"><?= $filtre ?> : <input type="checkbox" onclick="filtre('<?= $filtre ?>')" checked/></li>
        <?php
    }
    ?>
  </ul>
</div>
