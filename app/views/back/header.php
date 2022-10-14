<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= PROJECT; ?>
    </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/back/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/back/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/back/plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/back/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/back/plugins/codemirror/theme/monokai.css">


</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= PUBLIC_PATH; ?>/back/index3.html" class="brand-link">
            <img src="<?= PUBLIC_PATH; ?>/back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= PROJECT; ?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= PUBLIC_PATH; ?>/back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?= $admin; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-header">COURSES</li>

                    <?php foreach ($title as $key => $val) :?>

                    <li class="nav-item menu-close">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                <?= $key; ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <?php foreach ($val as $course): ?>
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p><?= $course['name']; ?></p>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                    </li>

                    <?php endforeach; ?>

                    <li class="nav-header">MISCELLANEOUS</li>

                    <li class="nav-item menu-open">
                        <a href="<?= PUBLIC_PATH; ?>category/index" class="nav-link">
                            <p>
                                Category
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="<?= PUBLIC_PATH; ?>content/index" class="nav-link">
                            <p>
                                Content
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="<?= PUBLIC_PATH; ?>admin/logout" class="nav-link">
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
