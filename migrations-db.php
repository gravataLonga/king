<?php

use Doctrine\DBAL\Connection;
use Gravatalonga\Container\Container;
use Gravatalonga\Framework\ValueObject\Path;
use Gravatalonga\Web\Foundation\Kernel;

$app = new Kernel(new Path(__DIR__));

$container = Container::getInstance();

return $container->get(Connection::class);