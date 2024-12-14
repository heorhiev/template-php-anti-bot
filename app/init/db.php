<?php

use light\orm\dto\DatabaseDto;
use light\app\services\SettingsService;

/** @var DatabaseDto $options */
$options = SettingsService::load('database', DatabaseDto::class);

\light\orm\services\DBService::init($options);