<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>IeCoures</title>

    <!-- Styles -->
    <link href="<?= PUBLIC_PATH; ?>front/css/core.min.css" rel="stylesheet">
    <link href="<?= PUBLIC_PATH; ?>front/css/thesaas.min.css" rel="stylesheet">
    <link href="<?= PUBLIC_PATH; ?>front/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= PUBLIC_PATH; ?>front/img/apple-touch-icon.png">
    <link rel="icon" href="<?= PUBLIC_PATH; ?>front/img/favicon.png">
</head>

<body>

<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
    <div class="container">

        <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="<?= PUBLIC_PATH; ?>user/index">
                <img class="logo-default" src="<?= PUBLIC_PATH; ?>front/img/logo.png" alt="logo">
                <img class="logo-inverse" src="<?= PUBLIC_PATH; ?>front/img/logo-light.png" alt="logo">
            </a>
        </div>


        <div class="topbar-right">
            <ul class="topbar-nav nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= PUBLIC_PATH; ?>user/index">Home</a>
                </li>

                <?php foreach ($title as $key => $val) : ?>
                    <li class="nav-item">
                    <span class="nav-link" style="cursor: pointer">
                        <?= $key; ?>
                    </span>
                        <div class="nav-submenu">
                            <?php foreach ($val as $course): ?>
                                <span class="nav-link" style="cursor: pointer">
                                <?= $course['name']; ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</nav>
<!-- END Topbar -->