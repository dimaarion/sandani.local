<?php
spl_autoload_register(function ($className) {
    require '../classes/' . $className . '.php';
});

$insert = new DDelete('test','id',[4,5,6]);
print_r($insert) ;

?>

<a href="/api/admin/test.php?names=ыыыыыыыыыы&alias=ыыыыыыыыыыы&content=ыыыыыыыыы">ok</a>
