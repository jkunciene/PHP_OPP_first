<?php
require "vendor/autoload.php";
use OOP\Mokytojai;
use OOP\Mokiniai;

$mokytojasM = new Mokytojai("Martynas", "Kasilionis", "nenusakomas", "vyriska", "WEB");
$mokytojasM->setAtlygis("2500");
$mokinysI = new Mokiniai("Irma", "Aite", "jauna", "moteriska", "9.5");
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


