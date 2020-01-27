<?php

use Psr\Container\ContainerInterface;
use StudioAtual\Validation\Validator;

$container->set('validator', function (ContainerInterface $c) {
    return new Validator;
});
