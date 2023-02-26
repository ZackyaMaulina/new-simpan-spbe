<asside class="sidebar">
    <?php if (isset($this->session->userdata['frontend_loggedin'])): ?>
        <div class="widget">
            <div class="widget-title">Artikel Pribadi
            </div>
            <div class="widget-profile">
                <img class="user-image" src="<?= get_frontend_gravatar($this->session->userdata['frontend_user_image']) ?>" alt="">
                <ul>
                    <li>
                        <h3>User Terdaftar</h3>
                    </li>
                    <li>
                        <h3>
                            <?= $this->session->userdata['frontend_name'] ?>
                        </h3>
                    </li>
                </ul>
            </div>
            <?php if (isset($pagetype) && $pagetype === 'forums'): ?>

                <div class="widget-text">
                    <?php if (isset($type) && $type !== NULL): ?>
                        <h3><a href="" class="add-article">Tulis Forum</a></h3>
                    <?php endif ?>
                    <h3><a href="<?= site_url('forums') . '?type=all' ?>">Lihat Forum Pribadi</a></h3>
                </div>
            <?php else: ?>
                <div class="widget-text">
                    <?php if (isset($type) && $type !== NULL): ?>
                        <h3><a href="" class="add-article">Tulis Artikel</a></h3>
                    <?php endif ?>
                    <h3><a href="<?= site_url('articles') . '?type=all' ?>">Lihat Artikel Pribadi</a></h3>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="widget">
        <div class="widget-title">
            <h3>
                Lingkup SPBE
            </h3>
        </div>
        <div class="widget-body">
            <ul>
                <?php foreach ($categories as $category): ?>
                    <li><a href="<?= site_url('category/index/' . $category['category_id']) ?>" class="list-item"><?php echo $category['category_name'] ?> </a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</asside>

<style>
    .widget-profile {
        display: flex;
        align-items: center;
        justify-content: start;
        gap: 10px;
    }

    .widget-profile img {
        width: 80px;
        height: auto;
    }

    .widget-text h3 {
        background-color: #D9D9D9;
        margin-top: 10px;
        text-align: center;
        padding: 10px;
        border-radius: 5px;
    }

    .widget-text h3 a {
        color: black;
    }

    .widget-profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    padding: 5px;
    border: 1px solid #fff;
    }
</style>