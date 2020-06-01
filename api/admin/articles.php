<?php
require_once('index.php');
$art = new Articles();
$r = $art->getArticles();
echo  json_encode($r);
