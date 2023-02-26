<!-- main -->
<section id="main-admin">
    <?php echo form_open('', 'class="form"'); ?>
    <div class="content">
        <div class="left">
            <div class="card2">
                <i class="bi bi-pencil-fill"></i>
                <h1>Pertanyaan</h1>
            </div>

            <div class="card2">
                <div class="row">
                    <label class="form-label">Nama Pengirim</label>
                    <input type="text" class="form-control" value="<?= $result['name'] ?>" disabled>
                </div>

                <div class="row">
                    <label class="form-label">Isi Pertanyaan</label>
                    <textarea placeholder=""><?= $result['messages'] ?></textarea>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="card2">
                <div class="row">
                    <label class="form-label">Jawab Pertanyaan</label>
                    <textarea id="mytextarea" name="jawaban"></textarea>

                    <?php if ($result['status'] === '1'): ?>
                        <p>Pertanyaan ini sudah dijawab!</p>
                    <?php endif ?>
                </div>
            </div>

            <div class="card6">
                <div class="btn-card6">
                    <a class="btn1" href="<?= base_url('admin/articles') ?>">
                        <i class="bi bi-reply-fill"> Kembali</i>
                    </a>
                    <?php if ($result['status'] === '1'): ?>
                        <button type="button" disabled><i class="bi bi-cloud-upload-fill">Simpan</i></button>
                    <?php else: ?>
                        <button type="submit"><i class="bi bi-cloud-upload-fill">Simpan</i></button>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</section>

<script>
    tinymce.init({
        selector: '#mytextarea',
        content_css: "<?= ADMIN_ASSETS_URL ?>tinymce.content.css",
        height: 200,
    });
</script>

<style>
    .mce-panel {
        width: 100%;
    }

    #main-admin .content .left {
        flex-basis: 50%;
    }

    #main-admin .content .right {
        flex-basis: 50%;
    }

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
</style>