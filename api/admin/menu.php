<?php
require_once('index.php');
$menu =  new Menu();



echo json_encode($menu->getMenu());
?>