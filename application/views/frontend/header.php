<!DOCTYPE html>
<html lang="id">

<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>
        <?php echo $header_meta['meta_title']; ?>
    </title>

    <meta name="generator" content="<?php echo $meta_generator; ?>">
    <meta name="robots" content="<?php echo $meta_robot; ?>">
    <meta name="description" content="<?php echo $header_meta['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $header_meta['meta_keyword']; ?>">

    <script type="text/javascript" src="<?php echo ADMIN_ASSETS_URL; ?>js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo ADMIN_ASSETS_URL; ?>js/libs/tinymce/tinymce.min.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="<?php echo ADMIN_ASSETS_URL; ?>index.css" rel="stylesheet">

    <!-- Load dynamic header script from plugin -->
   

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/favicon.ico">
    <link rel="shortcut icon" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/icon.png">
    <link rel="shortcut icon" sizes="72x72" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/icon-72x72.png">
    <link rel="shortcut icon" sizes="114x114" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/icon-114x114.png">
    

</head>

<body>
    <!-- Header -->
    <header class="user">
        <div class="logo-description">
            <img src="<?php echo ADMIN_ASSETS_URL; ?>img/logokuansing.png" alt="">
            <div class="teks-description">
                <h1>SIMP@AN SPBE</h1>
                <p>KUANTAN SINGINGI</p>
            </div>
        </div>
        <div class="navbar-links">
            <ul class="navbar-nav">
                <?php if (isset($this->session->userdata['frontend_loggedin'])): ?>
                    <li><a class="" href="forum.html">Forum</a></li>
                <?php endif; ?>
                <?php if (isset($this->session->userdata['frontend_loggedin'])): ?>
                    <li><a href="<?= site_url('articles') ?>">Artikel</a>
                    </li>
                <?php else: ?>
                    <li><a href="#article">Artikel</a></li>
                <?php endif; ?>
                <li><a class="active" href="<?= base_url() ?>">Beranda</a></li>
            </ul>
            <?php if (isset($this->session->userdata['frontend_loggedin'])): ?>
                <div class="button">
                    <button type="button"><a class="" href="<?= site_url('user/logout') ?>">Keluar</a></button>
                </div>
                <div class="icon">
                    <a href="profil.html"><i class="fa fa-user fa-2x"></i></a>
                </div>
            <?php else: ?>
                <div class="button">
                    <button type="button"><a class="" href="<?php echo site_url('user/login'); ?>">Masuk</a></button>
                </div>

            <?php endif; ?>
        </div>
    </header>