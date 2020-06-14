<?php
spl_autoload_register(function ($className) {
    require '../classes/' . $className . '.php';
});

$insert = new DSelect('articles, menu, menu_articles');
print_r($insert->queryRowJ('articles.art_id = menu_articles.articles AND menu.menu_id = menu_articles.menu AND  menu.menu_id = ?',1)) ;

?>

<a href="/api/admin/test.php?names=ыыыыыыыыыы&alias=ыыыыыыыыыыы&content=ыыыыыыыыы">ok</a>
