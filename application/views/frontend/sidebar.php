<asside class="sidebar">
    <?php if (isset($this->session->userdata['frontend_loggedin'])): ?>
        <div class="widget">
            <div class="widget-title">Artikel Pribadi
            </div>
            <div class="widget-profile">
                <img src="<?= get_frontend_gravatar($this->session->userdata['frontend_user_image']) ?>" alt="">
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
            <div class="widget-text">
                    <h3><a href="" class="add-article">Tulis Artikel</a></h3>
                <h3><a href="<?= site_url('blog/category/artikel') . '?type=all' ?>">Lihat Artikel Pribadi</a></h3>
            </div>
        </div>
    <?php endif; ?>
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
    
    /* .modal .modal-dialog .modal-content .modal-header h5 {
        color: black;
    } */
    
    /* .modal-body .row label {
          color: #969696;
        }

        .modal-body .row .input {
          margin-top: 10px;
          margin-bottom: 10px;
        }

        .modal-body .row .input input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            outline: 0;

          } */

        

</style>


