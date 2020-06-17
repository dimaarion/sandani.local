<?php
require_once('index.php');
$sansize = new Sansize();
$art = new DSelect('articles');
$r = $art->queryRow('art_id', $sansize->getrequest('art_id'));
echo  json_encode($r);
