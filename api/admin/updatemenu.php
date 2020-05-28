<?php
require_once('index.php');
$menu =  new Menu();
$menu->updateMenu();
echo json_encode($_REQUEST);
?>