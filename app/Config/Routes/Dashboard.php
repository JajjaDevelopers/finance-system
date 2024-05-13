<?php

namespace Config;
use App\Controllers\DashboardController;

$routes = Services::routes();
$routes->group('',static function ($routes){
$routes->get('/home',[DashboardController::class,'index']);
});

$routes->get('dashboard/logout',[DashboardController::class,'logout']);