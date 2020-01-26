<?php

use League\Flysystem\Filesystem;
use Psr\Container\ContainerInterface;
use StudioAtual\Storage\Adapter;

$containerBuilder->addDefinitions([
    'fs' => function (ContainerInterface $c) {
        $adapter = new Adapter($c, __DIR__ . '/../storage');
        return new Filesystem($adapter->getAdapter(), [
            'case_sensitive' => $adapter->getSensitive()
        ]);
    }
]);
