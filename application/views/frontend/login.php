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
  <div class="login">
    <div class="left">
      <div class="logo-description">
        <img src="<?php echo ADMIN_ASSETS_URL; ?>/img/logokuansing.png" alt="">
        <div class=" teks-description">
          <h1>SIMP@AN SPBE</h1>
          <p>KUANTAN SINGINGI</p>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="navbar-links">
        <ul class="navbar-nav">
          <li><a class="" href="<?php echo base_url(); ?>">Beranda</a></li>
        </ul>
      </div>
      <div class="form-description">
        <?php echo form_open('', 'class="form"'); ?>
        <div class="container">
          <img src="<?php echo ADMIN_ASSETS_URL; ?>/img/profil.png" alt="">
          <h1>WELCOME</h1>

          <div class="form-label">
            <label for="Username"></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <div class="password-label">
              <label for="password"></label>
              <input type="password" placeholder="Enter Password" name="password" required>
            </div>

            <div class="lupa-description">
              <a href="">Lupa kata sandi?</a>
            </div>

            <div class="btn-description">
              <button class="button1" type="submit">MASUK</button>
              <button class="button2"><a href="<?php echo site_url('user/register'); ?>">DAFTAR</a></button>

            </div>
          </div>
          <?php echo form_close(); ?>

        </div>
      </div>
      <script type="module" src="/main.js"></script>
</body>

</html>