<?php
require_once('index.php');
$user = new DSelect('user_message');
echo json_encode($user->queryRows());
