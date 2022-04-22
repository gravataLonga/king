# King  
## Web Framework  

![King Web Framework](cover.png)

| Requirements |         |
|--------------|:-------:|
| PHP          | \>= 8.0 |

## Installation  

``
composer create-project gravatalonga/king project-folder
``  

## Configuration  

 - Copy file `.env.example` to `.env` and configured them. And also you need to check config folder.  
 - run `npm install`  

## How is work  

### Service Provider   

Service provider is way to bind dependencies or libraries into application, you also can do any sort
of modification for already bound. 

For creating a service provider you need to implement `ServiceProvider` and implement two method.  
**Factories Method** is for create new entry, must return an array key and value.  
**Extensions Method** is for extended already bound entry it same as above.

Example: 

```php  
<?php

class Dumb implement ServiceProvider
{
    public function factories(): array
    {
        return [
            'random' => function() {
                return rand(0, 10);
            },
            'math' => function($random) {
                return 1 + $random;
            },
            'other' => [self, 'getOtherFactory']
        ];
    }
    
    public function extensions()
    {
        return [
            /**
             * @var $other is a previous entry
             */
            'other' => function (ContainerInterface $c, $other) {
                return $other + 1;
            }
        ];
    }
    
    public function getOtherFactory(ContainerInterface $container)
    {
        return $container->has('random') ? $container->get('random') : null;
    }
}
```  

### Configuration  

Each file exists on folder of config is loaded into container which name of file became key entry and content
became value of entry.  

### Paths   

Path bind into container are:   

`path.config` => Config folder  
`path.public` => Public folder  
`path.resource` => Resources folder  
`path.storage` => Storage folder  
`path.domain` => Domain folder  
`path.base` => Root folder  

### Create route  

```php  

$app = new App();

$app->get('/get', function(Request $request, Response $response) {
    $response->getBody()->write("Hello World");
    return $response;
});

$app->run();
```  

But you also can create routes in ServiceProvider  

```php  
<?php

class HelloServiceProvider implement ServiceProvider
{
    public function factories(): array
    {
        return [];
    }
    
    public function extensions()
    {
        return [
            RouteCollectorInterface::class => function (ContainerInterface $c, RouteCollectorInterface $route) {
                $route->get('/get', function(Request $request, Response $response) {
                    $response->getBody()->write("Hello world");
                    return $response;
                });
                
                return $route;
            }
        ];
    }
}
```  

### Service Provider  

#### CommandBusServiceProvider

 - `\League\Tactician\CommandBus`  
 - `\League\Tactician\Container\ContainerLocator`  

#### DatabaseServiceProvider  

 - `\Doctrine\DBAL\Connection`  
 - `database.connections` instance of `\Gravatalonga\DriverManager\Manager`  

#### DotEnvServiceProvider  

 - `env` is instance of `\Dotenv\Dotenv`  

#### LogServiceProvider  

 - `logger.manager` instance of `\Gravatalonga\DriverManager\Manager`  
 - `\Psr\Log\LoggerInterface`  

#### SlimServiceProvider  

 - `\Psr\Http\Message\ResponseFactoryInterface`  
 - `\Slim\Interfaces\CallableResolverInterface`  
 - `\Slim\Interfaces\RouteCollectorInterface`  

#### TwigServiceProvider  

 - `twig.loader` instance of `\Twig\Loader\FilesystemLoader`  
 - `twig.options` is array  
 - `\Twig\Environment`  

## Migration  

 - composer migrate

## Fixing Style  

 - composer fix