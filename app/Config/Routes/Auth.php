<?php

namespace Config;

use App\Controllers\AuthController;

$routes = Services::routes();
//Auth routes
$routes->group('', ['filter' => 'AuthCheck'], static function ($routes) {
    $routes->get('/', [AuthController::class, 'index'], ['filter' => 'AlreadyLogged']);
});
$routes->post('login', [AuthController::class, 'signUserIn']);

