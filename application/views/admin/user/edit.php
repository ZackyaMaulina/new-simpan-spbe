<section id="main-akun-setting">
    <?php echo form_open_multipart('', 'class="form"'); ?>
    <div class="content">
        <div class="left">
            <div class="card1">
                <i class="bi bi-person-fill"></i>
                <h1>Edit User</h1>
            </div>
            <div class="card2">
                <div class="row">
                    <label class="form-label">Username<span class="required"> *</span></label>
                    <input type="text" class="form-control" name="username" value="<?= $result['username'] ?>"
                        <?= $result['user_id'] ? 'disabled' : '' ?>>
                </div>

                <div class="row">
                    <label class="form-label">Email<span class="required"> *</span></label>
                    <input type="email" class="form-control" name="email" value="<?= $result['email'] ?>">
                </div>
                <div class="row">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $result['name'] ?>">
                </div>

                <div class="row">
                    <label for="input" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="card1">
                <i class="bi bi-image-fill"></i>
                <h1>Gambar Utama</h1>
                <div class="image">
                </div>
            </div>
            <div class="card2">
                <div class="image">
                    <?php if ($result['image'] !== ''): ?>
                        <img style="width: 100%;" src="<?= base_url($result['image']) ?>" alt="">
                    <?php else: ?>
                        <i class="bi bi-image-fill"></i>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card2">
                <input type="file" name="image" class="form-control" size="20" required="" />
            </div>
            <div class="card1">
                <h1>Grup Pengguna</h1>
                <select class="form-select" name="user_type">
                    <option value="admin" <?= $result['user_type'] === 'admin' ? 'selected' : '' ?>>Administrator</option>
                    <option value="user" <?= $result['user_type'] === 'user' ? 'selected' : '' ?>>User</option>

                </select>
                <div class="password">
                    <label for="inputPassword" class="form-label">Kata Sandi<span class="required"> *</span></label>
                    <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <div class="confirm-password">
                    <label for="inputConfirmPassword" class="form-label">Konfirmasi Kata Sandi<span class="required">
                            *</span></label>
                    <input type="confirm-password" class="form-control" id="inputConfirmPassword">
                </div>
                <div class="select-onof">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Aktifkan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Nonaktifkan
                        </label>
                    </div>
                </div>
            </div>
            <div class="card2">
                <div class="btn-card6">
                    <a class="btn1" href="<?= base_url('admin/users') ?>">
                        <i class="bi bi-reply-fill"> Kembali</i>
                    </a>
                    <button type="submit"><i class="bi bi-cloud-upload-fill"> Simpan</i></button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</section>

<style>
    .form input,
    .form textarea {
        width: 100%;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        outline: none;
    }

    .form .form-label,
    .form .form-label {
        width: 100%;
        margin-bottom: 10px;
        display: block;
    }

    #main-akun-setting .content .right .card2 {
        justify-content: center;
    }

    .card2 .image i {
        display: flex;
        color: #bdbbbb;
        padding: 20px;
        justify-content: center;
        font-size: 170px;
    }
</style>