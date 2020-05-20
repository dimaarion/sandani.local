<?php
require_once('index.php');
$menuclass =  new Menu();
$menu = $menuclass->getMenuPublic();
echo json_encode($menu);

?>