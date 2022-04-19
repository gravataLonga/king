<?php

declare(strict_types=1);

return [

    'driver' => $_ENV['LOG_DRIVER'] ?? 'default',

    'drivers' => [
        'default' => [
            'level' => \Monolog\Logger::WARNING,
            'name' => 'log.txt'
        ]
    ]
];
