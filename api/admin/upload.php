<?php
require_once('../classes/DUpload.php');
require_once('../classes/Sansize.php');
$sansize = new Sansize();
$upload = new DUpload('userfile','/images');
echo $upload->error;
echo $upload->size;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла на сервер</title>
</head>
<body>
<form enctype="multipart/form-data" action="/api/admin/upload.php" method="POST">
    
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>
</body>
</html>