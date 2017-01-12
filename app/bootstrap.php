<?php
/**
 * Application Bootstrap
 * @author John Kloor <kloor@bgsu.edu>
 * @copyright 2017 Bowling Green State University Libraries
 * @license MIT
 */

// Autoload dependencies.
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Start session management.
session_start();

// Work around proxy port issue when using HTTPS.
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    if ($_SERVER['SERVER_PORT'] === '80') {
        $_SERVER['SERVER_PORT'] = '443';
    }
}

// Create new Slim container with included settings.
$container = new \Slim\Container(['settings' => require 'settings.php']);

// Create new Slim application with the container.
$app = new \Slim\App($container);

// Load application dependencies, handlers, middleware and routes.
require 'dependencies.php';
require 'handlers.php';
require 'middleware.php';
require 'routes.php';

// Run the application.
$app->run();
