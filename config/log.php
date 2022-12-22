<?php

declare(strict_types=1);

return [

    'driver' => $_ENV['LOG_DRIVER'] ?? 'default',

    'drivers' => [
        'default' => [
            'level' => \Monolog\Level::Warning,
            'name' => 'log.txt',
            'handler' => ['single']
            // proccessor => []
        ]
    ]
];
