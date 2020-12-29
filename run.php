<?php
require 'config.php';
require 'vendor/autoload.php';

use Models\Database;

// Init Illuminate database connection
new Database();