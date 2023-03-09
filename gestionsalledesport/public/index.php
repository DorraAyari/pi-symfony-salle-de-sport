<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
require_once'C:\Users\User\gestionreclamation\pi-1\gestionsalledesport/vendor/autoload_runtime.php';
return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
