<?php declare(strict_types=1);

use Doctrine\DBAL\Connection;
use Gravatalonga\Framework\ValueObject\Path;
use Gravatalonga\KingFoundation\Kernel;
use function Gravatalonga\Framework\container;

$app = new Kernel(new Path(__DIR__));

$container = container();

/**
 * @var Connection
 */
return $container->get(Connection::class);
