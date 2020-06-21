<?php
require_once('index.php');
$sansize = new Sansize();

$id = $sansize->getrequest('id');
$znacenie = $sansize->getrequest('znacenie');
$prais = new DUpdate('prais',['znacenie','id'], [$znacenie], $id);

echo  json_encode([$prais->err, $prais->id]);
