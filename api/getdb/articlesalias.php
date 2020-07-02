<?php
require_once('index.php');
$sansize = new Sansize();
$art = new DSelect('articles');
$alias = $sansize->getrequest('art_alias');
$alias = str_replace('/', "", $alias);
echo  json_encode($art->queryRow('art_alias', $alias));
