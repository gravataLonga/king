<?php

namespace Tests;

use Gravatalonga\KingFoundation\Kernel;

trait CreateApplication
{
    public function createApplication()
    {
        $this->app = require_once __DIR__ . "/../bootstrap/bootstrap.php";
    }
}