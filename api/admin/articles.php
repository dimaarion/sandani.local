<?php
require_once('index.php');
$art = new DSelect('articles');
$r = $art->queryRows();
echo  json_encode($r);
