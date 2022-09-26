<?php

/**
 * ==============================
 *  Vendor Autoload
 * ==============================
 */
require_once '../vendor/autoload.php';

/**
 * ==============================
 *  Initialise VanillaPHP
 * ==============================
 */
require_once '../app/vanillaphp/Bean.php';

/**
 * ==============================
 *  Build Routes
 * ==============================
 */
require_once '../app/vanillaphp/RouteBuilder.php';

use VanillaPHP\Helpers\Route;

Route::handle($_SERVER['REQUEST_URI']);