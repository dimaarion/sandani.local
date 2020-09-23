<?php
require_once('index.php');
$sansize = new Sansize();
$grid = new DSelect('grid');
echo json_encode($grid->queryRows());