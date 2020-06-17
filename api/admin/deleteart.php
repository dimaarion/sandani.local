<?php
require_once('index.php');
$sansize = new Sansize();
$art =  new DDelete('articles','art_id', [$sansize->getrequest('art_id')]);
$art->delete();
echo json_encode($_REQUEST);
