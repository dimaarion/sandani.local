<?php
require_once('index.php');
$page =  new Work();
$menu =  new Menu();
$pages = [];
if($_REQUEST['page'] == 'menu'){
    $pages = $menu->adminMenuPage();
}


echo json_encode($pages);
?>