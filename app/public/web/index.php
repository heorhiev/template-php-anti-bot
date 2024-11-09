<?php

include '../../load.php';
include '../routes.php';

try {
    (new \light\http\Http)->run($_GET['action'] ?? '');
} catch (\Exception $e) {
    $date = date('Y-m-d');
    file_put_contents("/var/www/runtime/logs/error-{date}.log", print_r($e->getMessage(), 1) . PHP_EOL, FILE_APPEND);
}
