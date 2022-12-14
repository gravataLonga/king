<?php

declare(strict_types=1);

namespace Tests;

use Gravatalonga\KingFoundation\Kernel;
use Gravatalonga\KingFoundation\Testing\InteractHttp;
use Gravatalonga\KingFoundation\Testing\TraitRequest;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

/**
 * @covers \Gravatalonga\KingFoundation\Kernel
 */
class HelloWorldTest extends TestCase
{
    use InteractHttp;

    public function setUp(): void
    {
        $this->createApplication();
    }

    /**
     * @test
     */
    public function it_can_handle_request()
    {
        $this->app->get('/get', function (Request  $request, Response  $response) {
            $response->getBody()->write('Hello World');
            return $response;
        });

        $response = $this->app->handle($this->createRequest('GET', '/get'));
        $body = $response->getBody();

        $this->assertNotEmpty($body);
        $this->assertEquals('Hello World', $body);
    }
}