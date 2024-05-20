<?php

declare(strict_types=1);
define('BASE_PATH', __DIR__ . '/');

require_once BASE_PATH . 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__); 
$dotenv->load();

require_once BASE_PATH . 'src/orm/bootstrap.php';
// routes
require_once BASE_PATH . 'src/routes/user.route.php';
require_once BASE_PATH . 'src/routes/login.route.php';

Flight::start();