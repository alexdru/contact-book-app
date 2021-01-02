<?php
require 'config.php';
require 'vendor/autoload.php';

use Illuminate\Support\Facades\Request;
use Models\Database;


// Init Illuminate database connection
new Database();


// Create Router instance
$router = new \Bramus\Router\Router();

// Activate CORS
function sendCorsHeaders()
{
    header("Access-Control-Allow-Origin: *");
}
$router->options('/.*', function () {
    sendCorsHeaders();
});
sendCorsHeaders();

// Define routes
$router->get('/api/contacts', '\Controllers\ContactController@getContacts');
$router->get('/api/contacts/limit/{limit}', '\Controllers\ContactController@getLimitedContacts');
$router->post('/api/contact/store', '\Controllers\ContactController@storeContact');


// Run it!
$router->run();