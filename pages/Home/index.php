<?php

$pageTitle = "Home";
$pageName = "home";
$metaDescription = "";

/**
 * ==============================
 *  Page Middleware
 * ==============================
 */
ob_start();

    include "./templates/index.html.php";

$output = ob_get_clean();

include "./templates/layout.html.php";
