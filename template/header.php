        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach ($x as $key => $value) : ?>
        <link rel="stylesheet" href="./css/<?php echo $value; ?>" />
        <?php endforeach; ?>

        <script src="/jquery/jquery.js"></script>
        <script src="/ckeditor/ckeditor.js"></script>
        <?php foreach ($x2 as $key => $value) : ?>
        <script src="./js/<?php echo $value; ?>"></script>
        <?php endforeach; ?>
        <script src="/bs-custom-file-input/bs-custom-file-input.js"></script>
        <meta name="keywords" content = "<?php echo $controller->ifElseContent($arr['keywords'], $row['art_keyword']); ?>">
        <meta name="description" content = "<?php echo $controller->ifElseContent($arr['descriptions'], $row['art_description']); ?>">
        <title><?php echo $controller->ifElseContent($arr['title'], $row['art_title']); ?></title>
