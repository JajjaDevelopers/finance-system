<?php

namespace Config;

use App\Controllers\GLController;

$routes = Services::routes();
$routes->group('', static function ($routes) {
  $routes->get('/generalLedger', [GLController::class, 'index']);
});
