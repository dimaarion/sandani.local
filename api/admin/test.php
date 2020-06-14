<?php
spl_autoload_register(function ($className) {
    require '../classes/' . $className . '.php';
});

$insert = new DInsert();
print_r($insert->DQuery()) ;
