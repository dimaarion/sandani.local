<?php require_once "./template/function.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <?php $controller->includer(true, true, './template/header.php', $controller, $controller->dirExt('css'), $controller->dirExt('js'), $menu_alias, $artRow); ?>
</head>

<body>
    <header>
        <?php $controller->includer(true, true, './template/menu.php', $controller, $menu_class, $menu_alias); ?>
        <div class="lineHead"></div>
        <?php $controller->includer(true, true, './template/linckpanel.php', $controller); ?>
    </header>  
    <?php $controller->includer(true, true, './template/messageicon.php', $controller);?>
    <article>
        <div class="row justify-content-md-center">
            <div class="col col-lg-1"></div>
            <div class="col-sm">
                <div class="col-sm">
                  
                            <?php
                            $controller->includer($sansize->getrequest('alias'), '', './template/gallery.php', $controller);
                            $controller->includer($controller->indexPage($sansize->getrequest('alias'), '.html'), $art_menu[0]['alias'], './template/subart.php', $controller, $art_menu);
                            $controller->includer($controller->indexPage($sansize->getrequest('alias'), '.html'), $artRow['art_alias'], './template/articles.php', $controller, $artRow);
                            $controller->includer($sansize->getrequest('alias'), 'calculator', './template/calculator.php', $controller, $artRow);
                            $controller->includer($sansize->getrequest('alias'), 'message', './template/message.php', $controller);
                            ?>
                </div>
            </div>
            <div class="col col-lg-1"></div>
        </div>
    </article>
    <?php $controller->includer(true, true, './template/footer.php', $controller); ?>
</body>

</html>