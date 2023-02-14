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

  <!-- Main CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="<?php echo ADMIN_ASSETS_URL; ?>index.css" rel="stylesheet">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/favicon.ico">
  <link rel="shortcut icon" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/icon.png">
  <link rel="shortcut icon" sizes="72x72" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/icon-72x72.png">
  <link rel="shortcut icon" sizes="114x114" href="<?php echo ADMIN_ASSETS_URL; ?>img/favicon/icon-114x114.png">

</head>

<body>
  <div class="signup">
    <div class="left">
      <div class="logo-description">
        <img src="<?php echo ADMIN_ASSETS_URL ?>/img/logokuansing.png" alt="">
        <div class=" teks-description">
          <h1>SIMP@AN SPBE</h1>
          <p>KUANTAN SINGINGI</p>
        </div>
      </div>
    </div>

    <div class="right">
    <?php if (isset($this->session->userdata['error'])) {
        echo '<div class="alert alert-callout alert-warning" role="alert">REGISTER GAGAL DI KIRIM<i class="fa fa-remove close" onclick="$(this).parent().remove();"></i></div>';
    } ?>

    <?php if (isset($this->session->userdata['success'])) {
        echo '<div class="alert alert-callout alert-success" role="alert">REGISTER BERHASIL<i class="fa fa-remove close" onclick="$(this).parent().remove();"></i></div>';
    } ?>

    <?php echo validation_errors('<div class="alert alert-callout alert-warning" role="alert">', '</div>'); ?>

      <div class="form-description">
        <?php echo form_open('', 'class="form "') ?>
          <div class="container">
            <img src="<?php echo ADMIN_ASSETS_URL ?>/img/profil.png" alt="">
            <h1>WELCOME</h1>          
            <div class="form-label">
              <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="Enter Name" name="name" required>
              </div>

              <div class="username">
                <label for="name"></label>
                <input type="text" placeholder="Enter Username" name="username" required>
              </div>

              <div class="email-label">
                <label for="Email"></label>
                <input type="text" placeholder="Enter Email" name="email" required>
              </div>

              <div class="password-description">
                <label for="password"></label>
                <input type="password" placeholder="Enter Password" name="password" required>
              </div>
              <div class="confirm-description">
                <label for="confirm password"></label>
                <input type="password" placeholder="Confirm Password" name="password_confirm" required>
              </div>

              <div class="btn-description">
                <button type="submit" class="button1">DAFTAR</button>
                <button class="button2"><a href="<?=site_url('user/login')?>">LOGIN</a></button>

              </div>
            </div>
          <?php echo form_close() ?>
      </div>
    </div>
    <script type="module" src="/main.js"></script>

</body>