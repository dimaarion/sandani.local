<?php
require_once('index.php');
$f = new Files();
echo json_encode($f->deleteFiles());

?>