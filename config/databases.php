<?php

declare(strict_types=1);

/** Databases Connections */
return [

    /** Master Database */
    'master' => [
        'dbname' => $_ENV['DATABASE_NAME'] ?? '',
        'user' => $_ENV['DATABASE_USER'] ?? '',
        'password' => $_ENV['DATABASE_PASSWORD'] ?? '',
        'host' => $_ENV['DATABASE_HOST'] ?? '',
        'driver' => $_ENV['DATABASE_DRIVER'] ?? 'pdo_mysql',
    ],

    /** Memory Databases */
    'memory' => [
        'charset' => 'UTF8',
        'memory' => true,
        'driver' => 'pdo_sqlite'
    ]
];
