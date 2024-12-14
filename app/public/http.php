<?php

try {
    (new \light\http\Http)->run($_GET['action'] ?? '');
} catch (\Throwable $e) {
    $date = date('Y-m-d_H');
    file_put_contents("/var/www/runtime/logs/error-{$date}.log", print_r($e, 1) . PHP_EOL, FILE_APPEND);
}
