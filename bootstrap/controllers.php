<?php

use StudioAtual\Controllers\Web\HomeController;
use StudioAtual\Controllers\Web\MailTestController;

$containerBuilder->addDefinitions([
    'Web.HomeController' => function ($c) {
        return new HomeController($c);
    },
    'Web.MailTestController' => function ($c) {
        return new MailTestController($c);
    }
]);
