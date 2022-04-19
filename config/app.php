<?php

declare(strict_types=1);

return [

    'name' => $_ENV['APP_NAME'] ?? 'APP',

    'env' => $_ENV['APP_ENV'] ?? 'local',

    'debug' => $_ENV['APP_DEBUG'] ?? false,
];
