<?php

$pageTitle = "404";
$metaDescription = "";

/**
 * ==============================
 *  Page Middleware
 * ==============================
 */
ob_start();

    include __DIR__."/templates/404.html.php";

$output = ob_get_clean();

include "../app/Global/layout.html.php";
