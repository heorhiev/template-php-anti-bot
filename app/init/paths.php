<?php

const APP_PATH = '/var/www';
const CONFIG_PATH = APP_PATH . '/config';
const VENDOR_PATH = APP_PATH . '/vendor';

const LOGS_PATH = APP_PATH . '/runtime/logs';
const COMMON_PATH = APP_PATH . '/common';
const PUBLIC_PATH = APP_PATH . '/public';
const PUBLIC_FILES_PATH = PUBLIC_PATH . '/files';


\light\app\services\AliasService::setPaths([
    '{@configPath}' => CONFIG_PATH,
    '{@vendorPath}' => VENDOR_PATH,
    '{@publicFilesPath}' => PUBLIC_FILES_PATH,
]);