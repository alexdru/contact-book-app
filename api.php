<?php
require 'vendor/autoload.php';

use Models\Database;

(Dotenv\Dotenv::createImmutable(__DIR__))->load();

// Init Illuminate database connection
new Database();


// Create Router instance
$router = new \Bramus\Router\Router();

// Activate CORS
function sendCorsHeaders()
{
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
}
$router->options('/.*', function () {
    sendCorsHeaders();
});
sendCorsHeaders();

// Define routes
$router->mount('/api', function() use ($router) {

    $router->get('/contacts', '\Controllers\ContactController@index');
    $router->post('/contact/store', '\Controllers\ContactController@store');

});

// Run it!
$router->run();