<?php
require_once('index.php');
$calcolator = new DSelect('prais');
echo json_encode($calcolator->queryRows());
