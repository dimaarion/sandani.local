<?php
require_once('index.php');
$menu =  new Menu();
$menu->deleteMenu();
echo json_encode($_REQUEST);
?>