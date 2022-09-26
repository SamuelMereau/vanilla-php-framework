<?php

use VanillaPHP\Helpers\Route;

$pages = json_decode(file_get_contents(__DIR__.'/../PageDirectory.json'), true);

foreach ($pages as $pageName => $slug) {
    Route::get($slug, $pageName.'@index');
}