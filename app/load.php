<?php

include 'vendor/autoload.php';
include 'paths.php';

spl_autoload_register(function ($className) {
    $className = str_replace("\\", "/", $className);
    include "{$className}.php";
});