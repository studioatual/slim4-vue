<?php

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('[/]', function (Request $request, Response $response) {
  $response->getBody()
    ->write('ok');
  return $response;
})->setName('home');
