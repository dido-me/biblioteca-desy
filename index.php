<?php

declare(strict_types=1);

define('BASE_PATH', __DIR__ . '/');

require_once BASE_PATH . 'vendor/autoload.php';

use Dotenv\Dotenv;

$env = $_ENV['APP_ENV'] ?: 'production';

if ($env === 'development') {
    $dotenv = Dotenv::createImmutable(BASE_PATH);
    $dotenv->load();
}


require_once BASE_PATH . 'src/orm/bootstrap.php';

// Routes
require_once BASE_PATH . 'src/routes/user.route.php';
require_once BASE_PATH . 'src/routes/login.route.php';

// Iniciar la aplicación FlightPHP
Flight::start();
