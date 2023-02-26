<main class="main-all">
    <!-- SIDEBAR -->
    <?php $this->load->view('frontend/sidebar.php'); ?>

    <div class="content">
        <?php if (isset($type) && $type !== NULL): ?>
            <section class="menu">
                <div class="list-menu">
                    <ul>
                        <li><u><a class="active" href=<?= site_url('forums') . '?type=all' ?>>Semua
                                    (<?= $total_artikel ?>)</a></u></li>
                    </ul>
                    <ul>
                        <li><a href="<?= site_url('forums') . '?type=draft' ?>">Konsep
                                (<?= $total_konsep ?>)</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?= site_url('forums') . '?type=published' ?>">Terpublikasikan
                                (<?= $total_published ?>)</a>
                        </li>
                    </ul>
                </div>
            </section>
        <?php endif ?>

        <section class="card search">
            <form class="example" action="action_page.php">
                <input type="text" placeholder="Apa yang ingin Anda cari?" name="search">
            </form>
        </section>

        <?php if ($forums):
            foreach ($forums as $forum): ?>
                <section class="card forums1">
                    <div class="forums">
                        <a href="<?= site_url('forums/detail/' . $forum['forum_id']); ?>">
                            <h1>
                                <?php echo $forum['title']; ?>
                            </h1>
                            <p>
                                <?php echo get_excerpt($forum['content'], 600) ?>
                            </p>
                        </a>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <ul>
                                <li>
                                    <h4>
                                        <?php if ($forum['category_name']): ?>
                                            <a style="color: #444;" href="#"><i class="fa-solid fa-tag"></i>
                                                Kategori :
                                                <?php echo $forum['category_name'] ?>
                                            </a>
                                        <?php endif ?>
                                    </h4>
                                </li>
                                <li>
                                    <h4>
                                        <?php if ($forum['user_id']): ?>
                                            <a style="color: #444;" href="#"><i class="fa fa-user"></i>
                                                Penulis :
                                                <?php echo $forum['name'] ?>
                                            </a>
                                        <?php endif ?>
                                    </h4>
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <h4>
                                        <?= tanggal_indonesia(date('d-m-Y', strtotime($forum['date_published']))); ?>
                                    </h4>
                                </li>
                            </ul>
                        </div>

                        <div class="right">
                            <ul>
                                <li>
                                    <i class="fa fa-heart brand-danger"></i>
                                    <h5>53</h5>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <i class="fa fa-eye"></i>
                                    <h5>
                                        <?php echo $forum['hits'] ?>
                                    </h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>

            <!-- <nav aria-label="Page navigation" class="blog_pagination">
                                                                                <?php // echo paginating($base_url, $total_post, $limit, $uri_segment);; ?>
                                                                            </nav> -->

        <?php else: ?>
            <?php $this->load->view('frontend/error-404.php'); ?>
        <?php endif; ?>

        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php echo form_open('', 'class="form"'); ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Tulis Forum Diskusi Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                class="material-symbols-outlined">
                                close
                            </span></button>
                    </div>
                    <div class="modal-body">

                        <div class="row title">
                            <label for="formGroupExampleInput" class="form-label">Judul Forum Diskusi</label>
                            <div class="input">
                                <input type="text" class="form-control" id="formGroupExampleInput" name="title"
                                    placeholder="Masukkan Judul">
                            </div>
                        </div>
                        <div class="row title">
                            <label for="formGroupExampleInput" class="form-label">Lingkup SPBE</label>
                            <div class="input">
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option selected> - Pilih Lingkup SPBE</option>
                                    <?php if ($categories): foreach ($categories as $category): ?>
                                            <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?>
                                            </option>
                                        <?php endforeach; endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row forum">
                            <label for="formGroupExampleInput" class="form-label">Konten</label>
                            <div class="col2">
                                <textarea id="mytextarea" class="textarea" placeholder="Tulis Artikel Di Sini"
                                    name="content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="save">
                            <button type="submit" class="btn btn-secondary" name="action" value="draft">Simpan</button>
                        </div>
                        <div class="send">
                            <button type="submit" class="btn btn-primary" name="action" value="publish">Kirim
                                Forum</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    tinymce.init({
        selector: '#mytextarea',
        content_css: "<?= ADMIN_ASSETS_URL ?>tinymce.content.css",
        height: 250,
    });
</script>

<style>
    .main-all .content .list-menu {
        gap: 40px;
        padding-right: 80px;
    }

    h1 {
        font-weight: bold;
        font-size: 25px;
        margin-bottom: 10px;
    }

    .fa-calendar:before {
        position: relative;
        top: 3.5px;
    }

    .fa-heart:before {
        position: relative;
        top: 3.5px;
    }

    .fa-eye:before {
        position: relative;
        top: 3.5px;
    }
</style>