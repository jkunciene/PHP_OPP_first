<?php
require "vendor/autoload.php";
use OOP\Mokytojai;
use OOP\Mokiniai;
use OOP\Darbuotojai;
use OOP\Spausdintuvas;

$mokytojasM = new Mokytojai("Martynas", "Kasilionis", "nenusakomas", "vyriska", "WEB");
$mokytojasM->setAtlygis("2500");
$mokinysI = new Mokiniai("Irma", "Aite", "jauna", "moteriska", "9.5");
$adminas = new Darbuotojai("Petras", "Petraitis", "45", "vyras", "admin");

?>
<ul>
    <?php foreach ($mokytojasM->getProfile() as $value):?>
    <li><?=$value; ?></li>
    <?php endforeach;   ?>
    <li><?=$mokytojasM->getAtlygis(); ?></li>
</ul>
<ul>
    <?php foreach ($mokinysI->getProfile() as $value):?>
    <li><?=$value; ?></li>
    <?php endforeach;   ?>
</ul>
<ul>
    <?php foreach ($adminas->getProfile() as $value):?>
    <li><?=$value; ?></li>
    <?php endforeach;   ?>
</ul>

<?php Spausdintuvas::spausdinti($adminas->getProfile()); ?>

