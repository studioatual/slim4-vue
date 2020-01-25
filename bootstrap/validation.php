<?php

use Psr\Container\ContainerInterface;
use StudioAtual\Validation\Validator;

$containerBuilder->addDefinitions([
    'validator' => function (ContainerInterface $c) {
        return new Validator;
    }
]);
