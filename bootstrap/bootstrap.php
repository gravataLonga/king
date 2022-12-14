<?php

use Gravatalonga\Framework\ValueObject\Path;
use Gravatalonga\KingFoundation\Kernel;

/**
 * Create a new Kernel Application
 */
$app = new Kernel(new Path(__DIR__ . '/../'));

return $app;