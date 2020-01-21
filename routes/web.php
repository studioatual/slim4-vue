<?php

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('[/]', function (Request $request, Response $response) use ($app) {
    return $app->getContainer()
        ->get('view')
        ->render($response, 'index.html', []);
})->setName('home');
