<?php
require "vendor/autoload.php";
use OOP\Teacher;

$user2 = new Teacher('Petras', 'petras@gmail.com', '+37060579887', 'mokytojas');
$user2->setCommet('hgdshgasl');
?>
<ul>
    <?php foreach ($user2->profile() as $value): ?>
    <li><?=$value; ?></li>
    <?php endforeach;?>
</ul>



