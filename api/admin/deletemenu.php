<?php
require_once('index.php');
$sansize = new Sansize();
$menu = new DDelete('menu_articles', 'menu_art_id',[$sansize->getrequest('delmenuartid')]);
$menu->deleteMenu($sansize->getrequest('menu_delete'), $sansize->getrequest('menu_id'), $sansize->getrequest('menu_art_id'));
$menu->delete();
?>