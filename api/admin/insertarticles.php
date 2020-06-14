<?php
require_once('index.php');
$menu =  new Articles();
$menu->insertArticles();
echo json_encode($_REQUEST);
