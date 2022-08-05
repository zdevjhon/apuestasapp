<?php

use App\Config\ErrorLog;

require './vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

ErrorLog::activateErrorLog();

require __DIR__ . '/public/app.php';