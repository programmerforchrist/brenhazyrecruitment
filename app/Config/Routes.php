<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

// jobs
$routes->get('jobs/single-job/(:num)', 'Jobs\JobsController::singleJob/$1',['as' => 'single.jobs']);
