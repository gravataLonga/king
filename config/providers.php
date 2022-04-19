<?php

declare(strict_types=1);

use Gravatalonga\Web\Foundation\CommandBusServiceProvider;
use Gravatalonga\Web\Foundation\DatabaseServiceProvider;
use Gravatalonga\Web\Foundation\LogServiceProvider;
use Gravatalonga\Web\Foundation\SlimServiceProvider;
use Gravatalonga\Web\Foundation\TwigServiceProvider;

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
