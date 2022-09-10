<?php

$pageTitle = "404";
$pageName = "404";
$metaDescription = "";

/**
 * ==============================
 *  Page Middleware
 * ==============================
 */
ob_start();

    include "./templates/404.html.php";

$output = ob_get_clean();

include "./templates/layout.html.php";
