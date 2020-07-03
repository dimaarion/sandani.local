<?php
require_once('index.php');
$calcolator = new DSelect('calculator');
echo json_encode($calcolator->queryRows());