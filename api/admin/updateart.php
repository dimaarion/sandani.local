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
        $sansize->getrequest('img'),
        $sansize->getrequest('name'),
        $sansize->getrequest('title'),
        $sansize->getrequest('alias'),
        $sansize->getrequest('keyword'),
        $sansize->getrequest('descript'),
        $sansize->getrequest('subcontent'),
        $_REQUEST['content'], 
        $sansize->getrequest('params'),
    ],
    $sansize->getrequest('art_id')
);

if($_REQUEST){
    header('location:/admin/index.html/articlesupdate/'. $_REQUEST['art_id']);
}

