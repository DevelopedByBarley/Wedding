<?php

use App\Controllers\Controller;

// route_group -> /


$r->addRoute('GET', 'eskuvonk/', [Controller::class, 'index']);
//$r->addRoute('GET', 'cookie-info', [Controller::class, 'cookie']);
$r->addRoute('POST', 'eskuvonk/register', [Controller::class, 'register']);
