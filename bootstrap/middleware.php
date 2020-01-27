<?php

use Slim\Views\TwigMiddleware;
use StudioAtual\Middleware\CsrfFieldsMiddleware;

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->add(TwigMiddleware::create($app, $container->get('view')));
$app->add(new CsrfFieldsMiddleware($container));
$app->add('csrf');
