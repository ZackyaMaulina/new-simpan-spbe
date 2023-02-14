<section class="error_area">
    <div class="error_content_inner">
        <img src="<?php echo $theme_url; ?>img/error.png" alt="">
        <h1>404</h1>
        <h3>Sorry article not found</h3>
        <a class="more_btn" href="<?php echo site_url('', TRUE) ?>">Pergi ke Beranda <i
                class="fa fa-angle-right"></i></a>
    </div>
</section>
<style>
    .error_area {
        margin: 30px auto;
    }

    .error_content_inner {
        text-align: center;
    }

    .error_content_inner h1 {
        font-size: 2rem;
    }
</style>