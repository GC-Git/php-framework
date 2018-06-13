<?php

// Load bootstrap to apply configuration
include('config/bootstrap.php');

// Process URL into Application routing parameters
$route = new route();

// Start session to track user
session_start();

// Intitalize Flash Message
$_SESSION['flashMessage'] = null;


// User security check
defined('APP_AUTH_TYPE') or
    die ("Configuration Setting: APP_AUTH_TYPE is not set.");
if ( 0 !== APP_AUTH_TYPE && !isset($_SESSION['username']) && 'admin' == $route->getController() ) {
     $_SESSION = 0; // Overrides everything in session to be sure data is gone
     session_destroy();
     session_start();
     header ( 'Location: ' . APP_DOC_ROOT . '/auth/login' );
}

// Route request to desired controller
switch ( $route->getController() ) {

    case 'auth':
        include( APP_CONTROLLER . '/authController.php');
        break;

    case 'trailers':
        include( APP_CONTROLLER . '/trailersController.php');
        break;

    case 'admin':
        include( APP_CONTROLLER . '/adminPanelController.php');
        break;

    default:
        include( APP_CONTROLLER . '/trailersController.php');
        break;
}
