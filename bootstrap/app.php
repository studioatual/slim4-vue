<?php

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$containerBuilder = new ContainerBuilder();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/render.php';
require_once __DIR__ . '/mail.php';
require_once __DIR__ . '/logs.php';
require_once __DIR__ . '/validation.php';
require_once __DIR__ . '/storage.php';
require_once __DIR__ . '/controllers.php';

AppFactory::setContainer($containerBuilder->build());
$app = AppFactory::create();
$container = $app->getContainer();
$container->get('db')->setAsGlobal();
$container->get('db')->bootEloquent();

require_once __DIR__ . '/middleware.php';
require_once __DIR__ . '/errors.php';

require_once __DIR__ . '/../routes/api.php';
require_once __DIR__ . '/../routes/web.php';
