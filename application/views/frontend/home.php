<main class="home">
    <div class="content">
        <div class="home-text">
            <h1>Sistem Informasi Managemen Pengetahuan</h1>
            <p>Sistem Informasi Manajemen Pengetahuan (SIMP@N) adalah aplikasi Sistem Pemerintahan Berbasis
                Elektronik
                (SPBE) untuk memfasilitasi pertukaran informasi dan alih pengetahuan antar pelaksana SPBE melalui
                Artikel, Forum dan Help Desk yang dikelompokkan berdasarkan lingkup tertentu.</p>
            <div class="h-search-form">

                <input type="text" placeholder="Apa yang ingin Anda cari?" name="search">
            </div>
        </div>
        <div class="home-image">
            <img src="<?php echo ADMIN_ASSETS_URL; ?>img/beranda.png" alt="">
        </div>
    </div>
    <!-- categories -->
    <div class="feature-content">
        <?php if (isset($this->session->userdata['frontend_loggedin'])): ?>
            <a href="<?= site_url('articles') ?>">
                <div class="row">
                    <div class="main-row">
                        <div class="row-image">
                            <img src="<?php echo ADMIN_ASSETS_URL; ?>img/news-report.png" alt="">
                        </div>
                        <div class="row-text">
                            <h2>Artikel</h2>
                            <p>Berbagi pengetahuan atau mencari informasi mengenai SPBE melalui Artikel.</p>
                        </div>
                    </div>
                </div>
            </a>
        <?php else: ?>
            <a href="#article">
                <div class="row">
                    <div class="main-row">
                        <div class="row-image">
                            <img src="<?php echo ADMIN_ASSETS_URL; ?>img/news-report.png" alt="">
                        </div>
                        <div class="row-text">
                            <h2>Artikel</h2>
                            <p>Berbagi pengetahuan atau mencari informasi mengenai SPBE melalui Artikel.</p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endif; ?>

        <a href="<?php echo site_url('forums'); ?>">
            <div class="row">
                <div class="main-row">
                    <div class="row-image">
                        <img src="<?php echo ADMIN_ASSETS_URL; ?>img/discussion.png" alt="">
                    </div>
                    <div class="row-text">
                        <h2>Forum Diskusi</h2>
                        <p>Bertukar pendapat antar pengguna melalui diskusi dalam Forum.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo site_url('helpdesk'); ?>">
            <div class="row">
                <div class="main-row">
                    <div class="row-image">
                        <img src="<?php echo ADMIN_ASSETS_URL; ?>img/customer-care.png" alt="">
                    </div>
                    <div class="row-text">
                        <h2>Help Desk</h2>
                        <p>Bertanya tentang suatu topik tertentu melalui layanan Help Desk.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- categories -->
    <section id="article" class="content-article">
        <div class="article-title">Artikel Terbaru</div>
        <div class="article1">

            <?php //printr($articles); die(); ?>
            <?php if ($articles):
                foreach ($articles as $article): ?>
                    <div class="card-articles">
                        <a href="<?= site_url('articles/detail/' . $article['article_id']) ?>">
                            <?php if ($article['image']): ?>
                                <div class="images">
                                    <img alt="" src="<?= base_url($article['article_image']); ?>" />
                                </div>
                            <?php endif; ?>
                            <h2>
                                <?php echo $article['title']; ?>
                            </h2>
                            <p>
                                <?php echo get_excerpt($article['content'], 300) ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="content-article2">
        <div class="article-title">Artikel Terpopuler</div>
        <div class="article1">
            <?php if ($articles): foreach ($articles as $article): ?>
                    <div class="card-articles">
                    <a href="<?= site_url('articles/detail/' . $article['article_id']) ?>">
                            <?php if ($article['image']): ?>
                                <div class="images">
                                    <img alt="" src="<?= base_url($article['article_image']); ?>" />
                                </div>
                            <?php endif; ?>
                            <h2>
                                <?php echo $article['title']; ?>
                            </h2>
                            <p>
                                <?php echo get_excerpt($article['content'], 300) ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
    </section>
    <section class="content-visi">
        <div class="visi-title">VISI & MISI SPBE</div>
        <div class="visi">
            <div class="card-visi">
                <h2>VISI</h2>
                <p>“Terwujudnya sistem pemerintahan berbasis elektronik yang terpadu dan menyeluruh untuk mencapai
                    birokrasi dan pelayanan publik yang berkinerja tinggi.”</p>
            </div>
            <div class="card-visi">
                <h2>MISI</h2>
                <p>Untuk mencapai visi SPBE, misi SPBE adalah :</p>
                <ol>
                    <li>Melakukan penataan dan penguatan organisasi dan tata kelola sistem pemerintahan berbasis
                        elektronik yang terpadu;</li>
                    <li>Mengembangkan pelayanan publik berbasis elektronik yang terpadu, menyeluruh, dan menjangkau
                        masyarakat luas;</li>
                    <li>Membangun fondasi teknologi informasi dan komunikasi yang terintegrasi, aman, dan andal; dan
                    </li>
                    <li>Membangun SDM yang kompeten dan inovatif berbasis teknologi informasi dan komunikasi.</li>
                </ol>
            </div>
        </div>
    </section>
</main>

<style>
    .card-visi ol {
        list-style: revert;
        padding-left: 20px;
    }

    .card-visi ol li {
        margin-bottom: 10px;
    }

    .home .content-visi .card-visi p {
        padding: 20px 0;
        text-align: left;
        display: block;
        font-size: 16px;
        padding-top: 5px;
    }
</style>