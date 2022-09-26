<?php
    $dotenv = Dotenv\Dotenv::createImmutable(realpath(dirname(__DIR__).'/..'));
    $dotenv->load();
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription; ?>">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <!-- OpenGraph -->
    <meta property="og:site_name" content="<?= $_ENV["SITE_NAME"] ?>" />
    <meta property="og:title" content="<?= $pageTitle; ?> | <?= $_ENV["SITE_NAME"] ?>" />
    <meta property="og:description" content="<?= $metaDescription; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://<?= $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>" />
    <link rel="stylesheet" href="<?= mix('/css/styles.css'); ?>" />
    <script src="<?= mix('/js/app.js') ?>" async defer></script>
    <link rel="canonical" href="<?= "https://".$_SERVER["HTTP_HOST"]."/".$_SERVER['PHP_SELF']?>">
    <title><?= $pageTitle ?> | <?= $_ENV["SITE_NAME"] ?></title>
</head>
<body>
    <?= $output ?>
</body>
</html>