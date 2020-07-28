<?php
require_once('index.php');
$sittens = new DSelect('sittens');
echo json_encode($sittens->queryRow('sittens_id ',1));