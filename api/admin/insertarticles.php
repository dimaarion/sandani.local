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
        $sansize->getrequest('img'),
        $sansize->getrequest('name'),
        $sansize->getrequest('title'),
        $sansize->getrequest('alias'),
        $sansize->getrequest('keyword'),
        $sansize->getrequest('descript'),
        $sansize->getrequest('subcontent'),
        $sansize->getrequest('content'),
        $sansize->getrequest('params'),
        
    ]
);
header('location:/admin/index.html/articles/1');

