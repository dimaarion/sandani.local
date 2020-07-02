<?php
require_once('index.php');
$menu =  new Menu('menu');
echo json_encode($menu->getMenu());
?>