<?php
require_once('index.php');
$art = new Menu();
$r = $art->getMenuArtId();
echo  json_encode($r);
