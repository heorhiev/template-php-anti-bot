<?php

include '../../load.php';
include '../routes.php';

(new \light\http\Http)->run($_GET['action'] ?? '');