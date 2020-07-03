<?php
require_once('index.php');
$calcolator = new DSelect('grid');
echo json_encode($calcolator->queryRows());
