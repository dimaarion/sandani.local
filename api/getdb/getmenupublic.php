<?php
require_once('index.php');
$art = new Menu();
$r = $art->getMenuPublic();
echo  json_encode($r);
?>