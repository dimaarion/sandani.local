<?php
require_once('index.php');
$sansize = new Sansize();
$art = new DSelect('articles');
echo  json_encode($art->queryRow('art_id', $sansize->getrequest('art_id')));
