<?php
require_once('index.php');
$work = new Work();
$countMyork = $work->getMyworkCountStep();
echo json_encode($countMyork);
?>