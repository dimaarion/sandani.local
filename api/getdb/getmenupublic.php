<?php
require_once('index.php');
$art = new DSelect('menu');
$r = $art->queryRows();
echo  json_encode($r);
?>