<?php
require_once('index.php');
$sansize = new Sansize();
$art =  new DUpdate(
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
        'params',
        'art_id'
    ],

    [
        $sansize->getrequest('art_img'),
        $sansize->getrequest('art_name'),
        $sansize->getrequest('art_title'),
        $sansize->getrequest('art_alias'),
        $sansize->getrequest('art_keyword'),
        $sansize->getrequest('art_descript'),
        $sansize->getrequest('art_subcontent'),
        $_REQUEST['art_content'], 
        $sansize->getrequest('params'),
    ],
    $sansize->getrequest('art_id')
);
echo json_encode($_REQUEST);
