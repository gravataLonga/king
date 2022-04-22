<?php

declare(strict_types=1);

namespace Tests;

use Gravatalonga\KingFoundation\Kernel;
use PHPUnit\Framework\TestCase;
use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Psr7\Uri;

/**
 * @covers \Gravatalonga\KingFoundation\Kernel
 */
class HelloWorldTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_handle_request()
    {
        $http = new Kernel();

        $http->get('/get', function (Request  $request, Response  $response) {
            $response->getBody()->write('Hello World');
            return $response;
        });

        $response = $http->handle($this->createRequest('GET', '/get'));
        $body = $response->getBody();

        $this->assertNotEmpty($body);
        $this->assertEquals('Hello World', $body);
    }

    public function createRequest(string $method, string $uri, ?string $payload = null, array $headers = []): Request
    {
        $handle = fopen('php://temp', 'w+');
        $stream = (new StreamFactory())->createStreamFromResource($handle);

        if (! empty($payload)) {
            $stream->write($payload);
        }

        $uri = new Uri('', '', 80, $uri);
        $h = new Headers();
        foreach ($headers as $key => $value) {
            $h->addHeader($key, $value);
        }

        return new Request($method, $uri, $h, [], [], $stream);
    }
}