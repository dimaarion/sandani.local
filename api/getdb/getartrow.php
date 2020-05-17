<?php
require_once('index.php');
$art = new Articles();
$rez = $art->getArtRows();
echo $rez;
?>