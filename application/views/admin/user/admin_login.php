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

<body class="body-admin">
  <div class="login-admin">
    <div class="left">
      <div class="logo-description">
        <div class=" teks-description">
          <h1>Sign in</h1>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="form-description">
      <?php echo form_open('', 'class="form"'); ?>
        <!-- <form method="post" action="login.php"> -->
          <div class="container">
            <div class="form-label">
              <p>Username</p>
              <label for="Username"></label>
              <input type="text" placeholder="" name="username" required>

              <div class="password-label">
                <p>Password</p>
                <label for="password"></label>
                <input type="password" placeholder="" name="password" required>
              </div>

              <div class="lupa-description">
                <a href="">Forgotten?</a>
              </div>

              <div class="btn-description">
                <div class="check-button">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    Remember me
                  </label>
                </div>
                <div class="button">
                  <button class="button1" type="submit">login</button>
                </div>
              </div>
            </div>
        <!-- </form> -->
        <?php echo form_close(); ?>
      </div>
    </div>
    <script type="module" src="/main.js"></script>
</body>

</html>