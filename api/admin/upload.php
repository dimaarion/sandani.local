<?php

require_once('../classes/DUpload.php');
require_once('../classes/Sansize.php');
$sansize = new Sansize();
$upload = new DUpload('userfile', '/img/window');

echo $upload->size;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $upload->error; ?></title>
</head>

<body>
  

    <script>
       
        if (document.title == 'Ошибка загрузки.') {     
           
                    document.location = '/admin/index.php/files/no_files';
        } else {
                    document.location = '/admin/index.php/files/on_files';
              
        }
    </script>
</body>

</html>