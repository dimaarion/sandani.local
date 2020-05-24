<?php
require_once('index.php');
$menu =  new Menu();
$menu->insertMenu();
echo json_encode($_REQUEST);
?>