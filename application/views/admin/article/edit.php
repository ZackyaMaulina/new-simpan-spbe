<!-- main -->
<section id="main-admin">
    <?php echo form_open_multipart('', 'class="form"'); ?>
    <div class="content">
        <div class="left">
            <div class="card2">
                <i class="bi bi-pencil-fill"></i>
                <h1>Edit Artikel</h1>
            </div>

            <div class="card2">
                <div class="row">
                    <label class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" name="title" value="<?= $result['title'] ?>">
                </div>

                <div class="row">
                    <label class="form-label">Konten Artikel</label>
                    <textarea id="mytextarea" placeholder="" name="content"><?= $result['content'] ?></textarea>
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
                <!-- <br /><br />
                <input type="submit" value="upload" /> -->
                </form>
            </div>

            <div class="card3">
                <i class="bi bi-file-earmark-fill"></i>
                <h1>Pilih Kategori</h1>
            </div>
            <div class="card4">
                <div class="row">
                    <label for="">Kategori</label>
                    <select class="form-select" name="category_id">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['category_id'] ?>"
                                <?= $category['category_id'] === $result['category_id'] ? 'selected' : '' ?>><?=
                                            $category['category_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="card5">
                <h1>Tanggal Diterbitkan</h1>
                <input type="date" id="start" name="date_published"
                    value="<?= date('Y-m-d', strtotime($result['date_published'])) ?>">
                <h2>Tanggal/Bulan/Tahun</h2>
            </div>
            <div class="card6">
                <div class="btn-card6">
                    <a class="btn1" href="<?=base_url('admin/articles')?>">
                        <i class="bi bi-reply-fill"> Kembali</i>
                    </a>
                    <button type="submit"><i class="bi bi-cloud-upload-fill"> Simpan</i></button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</section>

<script>
    tinymce.init({
        selector: '#mytextarea',
        content_css: "<?=ADMIN_ASSETS_URL?>tinymce.content.css",
        height: 400,
    });
</script>

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
</style>