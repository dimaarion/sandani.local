        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="yandex-verification" content="67978ad304c6af1f" />
        <link rel="icon" href="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>/favicon.ico" type="image/x-icon">
        <?php foreach ($x as $key => $value) : ?>
                <link rel="stylesheet" href="./css/<?php echo $value; ?>" />
        <?php endforeach; ?>

        <script src="/jquery/jquery.js"></script>
        <?php foreach ($x2 as $key => $value) : ?>
                <script src="./js/<?php echo $value; ?>"></script>
        <?php endforeach; ?>
        <meta name="keywords" content="<?php echo $controller->ifElseContent($arr['keywords'], $row['art_keyword']); ?>">
        <meta name="description" content="<?php echo $controller->ifElseContent($arr['descriptions'], $row['art_description']); ?>">

        <title><?php echo $controller->ifElseContent($arr['title'], $row['art_title']); ?></title>
        <link href="./static/css/main.2680dfa7.chunk.css" rel="stylesheet">