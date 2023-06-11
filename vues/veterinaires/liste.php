<h2>Afficahge en mode liste</h2>

<ul>
    <?php foreach ($veterinaires as $veterinaire) { ?>
        <li><?= $veterinaire->nom_veterinaire ?> (<? $veterinaire->veterinaire ?>)</li>

    <?php }?>
</ul>