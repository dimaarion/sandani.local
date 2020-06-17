<?php
require_once('index.php');
$sansize = new Sansize();
$menu =  new DInsert(
    'menu',
    [
        'menu_art_id',
        'menu_name',
        'menu_alias',
        'menu_title',
        'menu_keyword',
        'menu_descript',
        'menu_content',
        'menu_img',
        'parent'
    ],
    [
        $sansize->getrequest('menu_art_id'),
        $sansize->getrequest('menu_name'),
        $sansize->getrequest('menu_alias'),
        $sansize->getrequest('menu_title'),
        $sansize->getrequest('menu_keyword'),
        $sansize->getrequest('menu_descript'),
        $sansize->getrequest('menu_content'),
        $sansize->getrequest('menu_img'),
        $sansize->getrequest('parent')
    ]
);

echo json_encode($_REQUEST);
