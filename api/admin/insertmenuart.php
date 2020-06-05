<?php
require_once('index.php');
$menu =  new Menu();
$menu->isertMenuArt();
echo json_encode($_REQUEST);


