<?php
require_once('index.php');
$art = new Articles();
$r = $art->getArticlesAlias();
echo  json_encode($r);
