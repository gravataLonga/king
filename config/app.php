<?php

declare(strict_types=1);

return [
    /**
     * Name of Application
     */
    'name' => $_ENV['APP_NAME'] ?? 'APP',

    /**
     * Version of Application
     */
    'version' => $_ENV['VERSION'] ?? '1.0.0',

    /**
     * Env of Application
     */
    'env' => $_ENV['APP_ENV'] ?? 'local',

    /**
     * Enable Debug
     */
    'debug' => $_ENV['APP_DEBUG'] ?? false,
];
