<?php

require_once BASE_PATH . 'src/models/user/user.repository.php';

use App\Models\UserRepository as UserRepository;

ORM::configure('mysql:host=localhost:3306;dbname=db_biblioteca');
ORM::configure('username', 'dido');
ORM::configure('password', 'dido123');
ORM::configure('driver_options', [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

// creando tablas
UserRepository::create_table();
