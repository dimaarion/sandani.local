<?php
require_once('index.php');
$trafik = new DSelect('trafik');
echo json_encode($trafik->queryRows());