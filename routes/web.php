<?php

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('[/]', function (Request $request, Response $response) use ($app) {
    $appName = $app->getContainer()->get('settings')['app']['name'];

    $response->getBody()
        ->write($appName);
    return $response;
})->setName('home');
