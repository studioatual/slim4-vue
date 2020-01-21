<?php

use Slim\Views\TwigMiddleware;

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->add(TwigMiddleware::create($app, $app->getContainer()->get('view')));
