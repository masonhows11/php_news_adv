<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="<?= $title ?? '' ?>">
    <?php if (isset($title)): ?>
        <title><?= $title ?></title>
    <?php else: ?>
        <title>بدون عنون</title>
    <?php endif; ?>
    <!-- favicon -->
    <link rel="icon" href="<?= assets('public/front_assets/img/favicon.png') ?>" sizes="20x20" type="image/png" />
    <!-- animate -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/animate.css') ?>" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/bootstrap.min.css') ?>" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/magnific-popup.css') ?>" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/nice-select.css') ?>">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/slick.css') ?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/font-awesome.min.css') ?>" />
    <!-- Flaticon -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/flaticon.css') ?>">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/style.css') ?>" />
    <!-- Responsive Css -->
    <link rel="stylesheet" href="<?= assets('public/front_assets/css/responsive.css') ?>">
</head>
