<?php

use Gravatalonga\Framework\ValueObject\Path;
use Gravatalonga\Web\Foundation\Kernel;
use Middlewares\Whoops;

require_once "../vendor/autoload.php";

chdir(__DIR__ . '/../');

$app = new Kernel(new Path(getcwd()));

$app->add(new Whoops());

$app->run();