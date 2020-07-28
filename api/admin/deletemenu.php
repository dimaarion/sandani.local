<?php
require_once('index.php');
$sansize = new Sansize();
$menu = new DDelete('menu_articles', 'menu',[$sansize->getrequest('menu_art_id')]);
$menu->deleteMenu('delete', $sansize->getrequest('menu_id'), $sansize->getrequest('menu_art_id'));
$menu->delete();
?>