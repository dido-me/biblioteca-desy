<?php

declare(strict_types=1);

define('BASE_PATH', __DIR__ . '/');

require_once BASE_PATH . 'vendor/autoload.php';

use Dotenv\Dotenv;

// Cargar las variables de entorno
$dotenv = Dotenv::createImmutable(BASE_PATH); 
$dotenv->load();

// Verifica que las variables de entorno críticas estén definidas
$required_env_vars = ['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS'];
foreach ($required_env_vars as $env_var) {
    if (!isset($_ENV[$env_var])) {
        die("Error: Missing required environment variable $env_var");
    }
}

require_once BASE_PATH . 'src/orm/bootstrap.php';

// Routes
require_once BASE_PATH . 'src/routes/user.route.php';
require_once BASE_PATH . 'src/routes/login.route.php';

// Iniciar la aplicación FlightPHP
Flight::start();
