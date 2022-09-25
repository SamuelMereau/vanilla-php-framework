<?php

use VanillaPHP\Helpers\Route;

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');