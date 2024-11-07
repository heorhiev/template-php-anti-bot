<?php

include '../load.php';
include '../routes.php';

\light\http\Http::run($_GET['action'] ?? '');