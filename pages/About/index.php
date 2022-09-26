<?php

$pageTitle = "About";
$metaDescription = "";

/**
 * ==============================
 *  Page Middleware
 * ==============================
 */
ob_start();

    include __DIR__."/templates/index.html.php";

$output = ob_get_clean();

include "../app/Global/layout.html.php";
