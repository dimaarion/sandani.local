<?php
require_once('index.php');
$menuclass =  new Menu();
$menu = $menuclass->getMenuPublic();
echo $menu;

?>