<?php

declare(strict_types=1);

use Gravatalonga\KingFoundation\CommandBusServiceProvider;
use Gravatalonga\KingFoundation\DatabaseServiceProvider;
use Gravatalonga\KingFoundation\LogServiceProvider;
use Gravatalonga\KingFoundation\SlimServiceProvider;
use Gravatalonga\KingFoundation\TwigServiceProvider;

return [

    /**
     * Foundation Service Providers
     */
    new LogServiceProvider(),
    new SlimServiceProvider(),
    new DatabaseServiceProvider(),
    new CommandBusServiceProvider(),
    new TwigServiceProvider()
];