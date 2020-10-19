<?php
require_once('index.php');
$calcolator = new DSelect('tide');
echo json_encode($calcolator->queryRows());
