<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/ho/{name}', function (Request $request, Response $response, $args) {
    $name =$request->getAttribute('name');
    $response->getBody()->write("Hello world! hi ali,$name");
    return $response;
});

$app->run();