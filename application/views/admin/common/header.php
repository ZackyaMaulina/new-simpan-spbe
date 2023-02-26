<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <link href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="//cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL; ?>index.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL; ?>tinymce.content.css">

    <!-- JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo ADMIN_ASSETS_URL; ?>tinymce/tinymce.min.js"></script>

    <!-- js md bootstrap -->
    <!-- <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script> -->

    <title>Admin - SIMPAN SPBE</title>
</head>

<body class="admin">

    <!-- navbar -->
    <section id="header">
        <nav>
            <div class="left">
                <img src="<?php echo ADMIN_ASSETS_URL; ?>/img/logokuansing.png" alt="">
                <span>ADMIN DASHBOARD</span>
            </div>
            <div class="right">
                <!-- <div class="right-left">
                    <i class="bi bi-bell-fill"></i>
                </div> -->
                <div class="right-center">
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-mdb-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            <span>
                                <?= $this->session->userdata['admin_name'] ?>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item"
                                href="<?= base_url('admin/users/edit/' . $this->session->userdata['admin_user_id']); ?>"><i
                                    class="bi bi-person-gear"></i>Account Settings</a>
                            <a class="dropdown-item" href="<?= base_url('admin/users/logout') ?>"><i
                                    class="bi bi-box-arrow-right"></i>Logout</a>
                        </div>
                    </li>
                </div>
                <div class="right-right">
                    <a href="<?php echo base_url('beranda'); ?>">
                        <i style="color:#fff;" class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </nav>
    </section>