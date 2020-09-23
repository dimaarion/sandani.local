<?php
require_once('index.php');
$sansize = new Sansize();
$update = new DUpdate('users', ['email_users', 'login_users', 'password_users', 'id_users'], [$sansize->getrequest('e'), $sansize->getrequest('l'), $sansize->getrequest('p')],1);
echo json_encode($update->err);