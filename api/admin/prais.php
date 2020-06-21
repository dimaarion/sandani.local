<?php
require_once('index.php');
$sansize = new Sansize();
$profiles = $sansize->getrequest('profiles');
$okno = $sansize->getrequest('okno');
$stvorka = $sansize->getrequest('stvorka');
$prais = new DSelect('prais');
$r = $prais->queryRowsJ("profiles = '$profiles' AND okno='$okno' AND stvorka='$stvorka'");
echo  json_encode($r);
