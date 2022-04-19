<?php

namespace Tests;

use Gravatalonga\Web\Foundation\CommandBusServiceProvider;
use League\Tactician\CommandBus;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gravatalonga\Web\Foundation\CommandBusServiceProvider
 */
class TacticianTest extends TestCase
{
    /**
     * @test
     */
    public function provider_built_tactician ()
    {
        $provider = new CommandBusServiceProvider();
        $entries = $provider->factories();

        $this->assertArrayHasKey(CommandBus::class, $entries);
    }
}