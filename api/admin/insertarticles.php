<?php
require_once('index.php');
$sansize = new Sansize();
$insert = new DInsert(
    'articles',
    [
        'art_img',
        'art_name',
        'art_title',
        'art_alias',
        'art_keyword',
        'art_descript',
        'art_subcontent',
        'art_content',
        'params'
    ],
    [
        $sansize->getrequest('art_img'),
        $sansize->getrequest('art_name'),
        $sansize->getrequest('art_title'),
        $sansize->getrequest('art_alias'),
        $sansize->getrequest('art_keyword'),
        $sansize->getrequest('art_descript'),
        $sansize->getrequest('art_subcontent'),
        $sansize->getrequest('art_content'),
        $sansize->getrequest('params'),
        
    ]
);

echo json_encode($insert->err);
