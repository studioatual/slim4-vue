<?php

use StudioAtual\Controllers\Api\UploadTestController;
use StudioAtual\Controllers\Api\ValidationTestController;
use StudioAtual\Controllers\Web\HomeController;
use StudioAtual\Controllers\Web\MailTestController;

$containerBuilder->addDefinitions([
    'Web.HomeController' => function ($c) {
        return new HomeController($c);
    },
    'Web.MailTestController' => function ($c) {
        return new MailTestController($c);
    },
    'Api.ValidationTestController' => function ($c) {
        return new ValidationTestController($c);
    },
    'Api.UploadTestController' => function ($c) {
        return new UploadTestController($c);
    },
]);
