<?php

include '../../load.php';
include '../bootstrap.php';

\light\http\Http::run($_GET['action'] ?? '');