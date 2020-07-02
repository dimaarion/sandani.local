<?php
require_once('index.php');
$connect = new DSelect('contact_panel');
echo json_encode($connect->queryRows());
?>