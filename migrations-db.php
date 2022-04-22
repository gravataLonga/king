<?php

declare(strict_types=1);

use Doctrine\DBAL\Connection;
use Gravatalonga\Framework\ValueObject\Path;
use Gravatalonga\KingFoundation\Kernel;

$app = new Kernel(new Path(__DIR__));

$container = container();

return $container->get(Connection::class);
