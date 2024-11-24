<?php

use app\orm\dto\config\DatabaseDto;
use light\app\services\SettingsService;

/** @var DatabaseDto $options */
$options = SettingsService::load('database', DatabaseDto::class);

\light\orm\services\db\DBService::init($options);