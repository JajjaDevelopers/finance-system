<?php

namespace Config;
use App\Helpers\Routes\RouteHelper;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

RouteHelper::appRoutes(__DIR__.'/Routes/');//recursively loads our routes
