<?php

declare(strict_types=1);
define('BASE_PATH', __DIR__ . '/');
require_once 'vendor/autoload.php';
require_once 'src/orm/bootstrap.php';

// routes
require_once 'src/routes/user.route.php';
require_once 'src/routes/login.route.php';

Flight::start();
