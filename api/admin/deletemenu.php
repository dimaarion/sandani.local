<?php
require_once('index.php');
$sansize = new Sansize();
$menu = new DDelete('menu', 'menu_id',[$sansize->getrequest('menu_id')]);
$menu->delete();
echo json_encode($sansize->getrequest('menu_id'));
?>