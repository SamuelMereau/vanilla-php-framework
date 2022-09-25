<?php

use VanillaPHP\Helpers\Route;

require_once './app/Routes.php';
require_once './vendor/autoload.php';

Route::handle($_SERVER['PHP_SELF']);