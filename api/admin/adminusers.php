<?php
require_once('index.php');
$users = new DSelect('users');
$u = $users->queryRow('id_users', 1);
echo json_encode([$u['email_users'], $u['login_users']]);