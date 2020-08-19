<?php
require_once('index.php');
$sansize = new Sansize();
$menuart = new DDelete('menu_articles', 'articles', [$sansize->getrequest('id')]);
$menuart->delete();
echo json_encode($_REQUEST);
?>