<?php
require_once('index.php');
$work = new Work();
$countFoto = $work->getMyFotoCountStep();
echo json_encode($countFoto);
?>