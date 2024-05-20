<?php

declare(strict_types=1);

define('BASE_PATH', __DIR__ . '/');

require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'config.php';

// ORM
require_once BASE_PATH . 'src/orm/bootstrap.php';

// Routes
require_once BASE_PATH . 'src/routes/user.route.php';
require_once BASE_PATH . 'src/routes/login.route.php';

// Iniciar la aplicación FlightPHP
Flight::start();
