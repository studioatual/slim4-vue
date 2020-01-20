<?php

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$containerBuilder = new ContainerBuilder();
require_once __DIR__ . '/config.php';

AppFactory::setContainer($containerBuilder->build());
$app = AppFactory::create();

require_once __DIR__ . '/../routes/web.php';
