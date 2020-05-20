<?php
require_once('index.php');
$connect = new Contact();
echo json_encode($connect->getContact());
?>