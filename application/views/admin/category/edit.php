<!-- main -->
<section id="main-admin">
    <?php echo form_open('', 'class="form"'); ?>
    <div class="content">
        <div class="left">
            <div class="card2">
                <i class="bi bi-pencil-fill"></i>
                <h1>Edit Kategori</h1>
            </div>

            <div class="card2">
                <div class="row">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" name="category_name">
                </div>
            </div>
        </div>
        <div class="right">
            <div class="card5">
                <h1>Tanggal Diterbitkan</h1>
                <input type="date" id="start" name="trip-start" value="2023-04-20" min="2018-01-01" max="2023-12-31">
                <h2>Tanggal/Bulan/Tahun</h2>
            </div>
            <div class="card6">
                <div class="btn-card6">
                    <a class="btn1" href="<?=base_url('admin/categories')?>">
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
</style>