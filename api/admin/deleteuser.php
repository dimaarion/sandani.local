<?php
require_once('index.php');
$sansize = new Sansize();
$user = new DDelete('user_message', 'userM_id', $_REQUEST['userM_id']);
$user->delete();
echo json_encode($_REQUEST['userM_id']);
