<?php

use StudioAtual\Controllers\Web\HomeController;

$containerBuilder->addDefinitions([
    'Web.HomeController' => function ($c) {
        return new HomeController($c);
    }
]);
