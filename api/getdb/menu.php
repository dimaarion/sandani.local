<?php
require_once('index.php');
$menuclass =  new Menu();
$menu = $menuclass->getMenu();
echo json_encode($menu) ;

?>