<?php
require_once('index.php');
$menuclass =  new DSelect('menu');
$menu = $menuclass->queryRows();
echo json_encode($menu) ;

?>