<div class="overlay-box filtreOverlay">
    live : <input type="checkbox" onclick="filtreInsta()" id="live" checked/><br>

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
        <?= $filtre ?> : <input type="checkbox" onclick="filtre('<?= $filtre ?>')" checked/>
        <?php
    }
    ?>
</div>