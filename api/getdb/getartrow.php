<?php
require_once('index.php');
$art = new Articles();
$rez = $art->getArtRows();
echo  json_encode($rez) ;
?>