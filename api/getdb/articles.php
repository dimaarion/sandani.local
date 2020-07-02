<?php
require_once('index.php');
$art = new DSelect('articles');
echo  json_encode($art->queryRows());
