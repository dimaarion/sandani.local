<?php
require_once('index.php');
$page =  new Work();
$pages = [];
if($_REQUEST['names'] !== '/' || $_REQUEST['names'] !== 'contact'){
    $pages = $page->adminPageImg();
}
echo json_encode($pages);
?>