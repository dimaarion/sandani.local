<?php
spl_autoload_register(function ($className) {
    require './adminpanel/admin/classes/' . $className . '.php';
});
$controller  = new Controller();
$sansize = new Sansize();
$menuClass = new DSelect('menu');
$menuClassRows = new DSelect('menu');
$articleClassRow = new DSelect('article');
$menu_class = new Menu();

//Переменные
$menu_alias =  $menuClass->queryRow('alias',$controller->indexPage($sansize->getrequest('alias'),'.html'));
$artRow = $articleClassRow->queryRow('art_alias',$controller->indexPage($sansize->getrequest('alias'),'.html'));
$menu = $menuClassRows->queryRows();
$menu_class->props = $menu;
?>
<!DOCTYPE html>
<html>
<head>
 <?php $controller->includer(true, true, './template/header.php', $controller, $controller->dirExt('css'), $controller->dirExt('js'), $menu_alias,$artRow); ?>
</head>
<body>
<header>
<?php $controller->includer(true, true, './template/menu.php', $controller,$menu_class,$menu_alias); ?>
<div class="lineHead"></div>
<?php $controller->includer(true, true, './template/linckpanel.php', $controller); ?>
</header>
</body>
</html>
