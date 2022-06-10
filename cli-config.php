<?php declare(strict_types=1);

use Doctrine\DBAL\Connection;
use Doctrine\Migrations\Configuration\Migration\ConfigurationArray;
use Gravatalonga\Framework\ValueObject\Path;
use Gravatalonga\KingFoundation\Kernel;
use function Gravatalonga\Framework\container;
use function Gravatalonga\Framework\instance;
use Doctrine\Migrations\Configuration\Connection\ExistingConnection;
use Doctrine\Migrations\DependencyFactory;

$app = new Kernel(new Path(__DIR__));

$container = container();

$config = new ConfigurationArray(instance('config.migrations'));

return DependencyFactory::fromConnection($config, new ExistingConnection($container->get(Connection::class)));