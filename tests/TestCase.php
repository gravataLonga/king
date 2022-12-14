<?php

namespace Tests;

use Gravatalonga\KingFoundation\Kernel;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreateApplication;

    protected Kernel $app;
}