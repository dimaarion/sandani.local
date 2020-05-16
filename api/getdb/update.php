<?php
require_once('index.php');
$menuclass =  new Menu();
$artclass =  new Articles();
$menuclass->updateMenu();
$r = $artclass->updateArt();
echo($r);