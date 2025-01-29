<?php

use craft\helpers\App;

return [
    'dsn' => getenv('DB_DSN') ?: 'mysql:host=127.0.0.1;port=3306;dbname=craft_test',
    'driver' => App::env('DB_DRIVER'),
    'server' => App::env('DB_SERVER'),
    'port' => App::env('DB_PORT'),
    'database' => App::env('DB_DATABASE'),
    'user' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASSWORD') ?: '',
    'schema' => getenv('DB_SCHEMA') ?: 'public',
    'tablePrefix' => getenv('DB_TABLE_PREFIX') ?: '',
];