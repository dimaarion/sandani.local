<?php
require_once('index.php');
$art = new Articles();
$r = $art->getArticlesid();
echo  json_encode($r);
