<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Container\ContainerInterface;

$containerBuilder->addDefinitions([
    'db' => function (ContainerInterface $c) {
        $capsule = new Capsule;
        $capsule->addConnection($c->get('settings')['db']);
        return $capsule;
    }
]);
