<?php

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$containerBuilder = new ContainerBuilder();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/render.php';
require_once __DIR__ . '/controllers.php';

AppFactory::setContainer($containerBuilder->build());
$app = AppFactory::create();
$container = $app->getContainer();

require_once __DIR__ . '/middleware.php';

require_once __DIR__ . '/../routes/web.php';
