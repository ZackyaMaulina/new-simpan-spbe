<main class="main-all">
    <!-- SIDEBAR -->
    <?php $this->load->view('frontend/sidebar.php'); ?>

    <div class="content">
            <section class="menu">
                <div class="list-menu">
                    <ul>
                        <li><u><a class="active" href=<?= site_url('blog/category/artikel') . '?type=all' ?>>Semua
                                    (<?= $total_artikel ?>)</a></u></li>
                    </ul>
                    <ul>
                        <li><a href="<?= site_url('blog/category/artikel') . '?type=draft' ?>">Konsep
                                (<?= $total_konsep ?>)</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?= site_url('blog/category/artikel') . '?type=waiting' ?>">Menunggu Persetujuan
                                (<?= $total_awaiting ?>)</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?= site_url('blog/category/artikel') . '?type=published' ?>">Terpublikasikan
                                (<?= $total_published ?>)</a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="<?= site_url('blog/category/artikel') . '?type=rejected' ?>">Ditolak
                                (<?= $total_rejected ?>)</a></li>
                    </ul>
                </div>
            </section>
    
        <section class="card search">
            <form class="example" action="action_page.php">
                <input type="text" placeholder="Apa yang ingin Anda cari?" name="search">
            </form>
        </section>

        <?php if ($articles):
            foreach ($articles as $article): ?>
                <section class="card articles1">
                    <div class="articles">
                        <a href="<?=site_url('articles/detail/' . $article['article_id']); ?>">
                            <h1>
                                <?php echo $article['title']; ?>
                            </h1>
                            <p>
                                <?php echo get_excerpt($article['content'], 600) ?>
                            </p>
                        </a>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <ul>
                                <li>
                                    <h4>
                                        <?php if ($article['user_id']): ?>
                                            <a style="color: #444;"
                                                href="#"><i
                                                    class="fa fa-user"></i>
                                                Penulis :
                                                <?php echo $article['name'] ?>
                                            </a>
                                        <?php endif ?>
                                    </h4>
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <h4><?=$article['date_published'] ?></h4>
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
                                    <i class="fa fa-thumbs-down"></i>
                                    <h5>0</h5>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <i class="fa fa-eye"></i>
                                    <h5>21</h5>
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
            <?php $this->load->view('frontend/' . $active_theme . '/error-404.php'); ?>
        <?php endif; ?>

        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <?php echo form_open('blog/save_artikel','class="form"'); ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Tulis Postingan Artikel Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                class="material-symbols-outlined">
                                close
                            </span></button>
                    </div>
                    <div class="modal-body">
                   
                        <div class="row title">
                            <label for="formGroupExampleInput" class="form-label">Judul Artikel</label>
                            <div class="input">
                                <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Masukkan Judul">
                            </div>
                        </div>
                        <div class="row title">
                            <label for="formGroupExampleInput" class="form-label">Lingkup SPBE</label>
                            <div class="input">
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option selected> - Pilih Lingkup SPBE</option>
                                    <?php if ($categories) : foreach ($categories as $category) : if ($category['term_data']['term_type'] === 'category') : ?>
                                    <option value="<?=$category['term_desc']['id']['term_id']?>"><?=$category['term_desc']['id']['name']?></option>
                                    <?php endif; endforeach; endif ?>
                                </select>
                            </div>
                        </div>
                        <div class="row article">
                            <label for="formGroupExampleInput" class="form-label">Konten</label>
                            <div class="col2">
                                <textarea id="textarea" class="textarea" placeholder="Tulis Artikel Di Sini" name="content"></textarea>
                            </div>
                        </div>

                       
                    </div>
                    <div class="modal-footer">
                        <div class="save">
                            <button type="button" class="btn btn-secondary"><a
                                    href="artikel-konsep.html">Simpan</a></button>
                        </div>
                        <div class="send">
                            <button type="submit" class="btn btn-primary">Kirim Artikel</button>
                        </div>
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    // Call TinyMCE
    <?php tmce_init(250) ?>
</script>

<style>
    .main-all .content .list-menu {
        gap: 40px;
        padding-right: 80px;
    }
</style>