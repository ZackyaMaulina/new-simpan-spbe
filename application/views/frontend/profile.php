<!-- main -->
<main class="main-profile">
    <?php echo form_open_multipart(''); ?>
    <asside class="sidebar">
        <div class="widget">
            <div class="widget-title">Profil Pengguna
            </div>
            <div class="widget-profile">
                <img class="user-image" src="<?= get_frontend_gravatar($user['image']) ?>" alt="">
            </div>

            <div class="widget-text">
                <div class="update-img">
                    <input type="file" name="image" class="form-control" size="20" />
                    <!-- <a href="">Update Profile</a> -->
                </div>
                <h3><i class="fa fa-sign-out"></i><a href="<?= site_url('user/logout') ?>">Log out</a></h3>
            </div>
        </div>
    </asside>
    <div class="content">
        <div class="title-profile">
            <h3>Halaman Profil Pengguna Terdaftar</h3>
        </div>
        <section class="first-card">
            <div class="article">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Username</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <?= $user['username'] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Nama</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <input type="text" name="name" value="<?= $user['name'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <input type="text" name="email" value=" <?= $user['email'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Password</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <input type="password" name="password" value="">
                        </div>
                    </div>
                    <hr>
                    <button type="submit">Simpan</button>
                </div>
            </div>
        </section>
    </div>
    <?php echo form_close(); ?>
</main>

<style>
    .content .first-card .article .card-body button {
        font-weight: bold;
        margin-left: auto;
        display: flex;
        background-color: #1b214f;
        border-radius: 7px;
        padding: 7px;
        color: white;
      
    }

    form {
        display: flex;
        width: 100%;
        gap: 30px
    }

    .main-profile .content .first-card {
        height: auto;
    }

    .widget-profile img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        padding: 5px;
        border: 1px solid #fff;
    }

    .article input {
        border: none;
        outline: 0;
    }

    .update-img {
        display: flex;
        align-items: center;
        border-radius: 10px;
        background: #d9d9d9;
        justify-content: center;
        margin-top: 20px;
        color: #000;
        padding: 10px;
        text-align: center;
    }
</style>