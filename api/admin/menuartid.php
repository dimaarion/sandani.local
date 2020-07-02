<?php
require_once('index.php');
$art = new Menu('menu');
$r = $art->getMenuArtId();
echo  json_encode($r);
