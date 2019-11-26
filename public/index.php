<?php

/**
 * Front controller
 *
 * PHP version 7.2
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
// $router->add('{controller}/{action}');
// $router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('Buyer', ['controller' => 'BuyerController', 'action' => 'index']);    
$router->add('Login', ['controller' => 'LoginController', 'action' => 'index']);
$router->add('User', ['controller' => 'UserController', 'action' => 'index']);
$router->add('ReadUsers', ['controller' => 'UserController', 'action' => 'readUsers']);     
$router->add('RegisterUser', ['controller' => 'UserController', 'action' => 'registerUser']);     
$router->add('GetSingleUser', ['controller' => 'UserController', 'action' => 'getSingleUser']);     
$router->add('UpdateUser', ['controller' => 'UserController', 'action' => 'updateUser']);     
$router->add('DeleteUser', ['controller' => 'UserController', 'action' => 'deleteUser']);     
$router->dispatch($_SERVER['QUERY_STRING']);
