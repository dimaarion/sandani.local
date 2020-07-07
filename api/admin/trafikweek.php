<?php
require_once('index.php');
$sansize = new Sansize();
$trafik = new DSelect('trafik');
echo json_encode($trafik->queryRow('trafik_id', 1));
