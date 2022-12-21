<?php

declare(strict_types=1);

/** Databases Connections */

use function Gravatalonga\Framework\storage_path;

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
    ],

    /** Sqlite */
    // 'sqlite' => [
    //    'charset' => 'UTF8',
    //    'memory' => false,
    //    'driver' => 'pdo_sqlite',
    //    'path' => storage_path()->suffix('filesystem')->suffix('database.sqlite')
    // ]

    /**
     * For more information visit:
     * https://www.doctrine-project.org/projects/doctrine-dbal/en/current/reference/configuration.html
     */
];
