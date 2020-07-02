<?php
require_once('index.php');
$sansize = new Sansize();
$alias = $sansize->getrequest('alias');
if ($alias != '/') {
    $alias = str_replace('/', "", $alias);
}
$art = new DSelect('articles, menu, menu_articles');
$rez = $art->queryRowJ('articles.art_id = menu_articles.articles AND menu.menu_art_id = menu_articles.menu AND  menu.menu_alias = ?', $alias);
echo  json_encode($rez) ;
?>