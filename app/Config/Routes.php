<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LearningController::index');
$routes->post('/learningStore', 'LearningController::store');
$routes->get('/viewLearn/(:num)', 'LearningController::view/$1');
$routes->post('/learningupdate', 'LearningController::update');
$routes->post('/learningdelete', 'LearningController::delete');