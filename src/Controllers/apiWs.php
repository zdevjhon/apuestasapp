<?php

//require './vendor/autoload.php';
require '../../vendor/autoload.php';
use App\Config\ErrorLog;

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();
