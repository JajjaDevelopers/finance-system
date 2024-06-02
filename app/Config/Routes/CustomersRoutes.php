<?php

namespace Config;

use App\Controllers\CustomersController;

$routes = Services::routes();
$routes->group('', static function ($routes) {
  $routes->get('/customersAdmin', [CustomersController::class, 'customerAdminMenu']);
});
