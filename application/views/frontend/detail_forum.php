<main class="main-artikel">
  <!-- SIDEBAR -->
  <?php $this->load->view('frontend/sidebar.php'); ?>

  <div class="content">
    <section class="card search">
      <form class="example" action="action_page.php">
        <input type="text" placeholder="Apa yang ingin Anda cari?" name="search">
      </form>

    </section>

    <section class="first-card">


      <?php if ($forum): ?>

        <div class="forum">
          <h1 style="margin-bottom: 20px;">
            <?= $forum['title']; ?>
          </h1>
          <?php echo $forum['content']; ?>
        </div>

      <?php else: ?>
        <?php $this->load->view('frontend/404.php'); ?>
      <?php endif; ?>

      <div class="conten-footer">
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
    <!-- <section class="form-comment"> -->
    <h1>Beri Tanggapan</h1>
    <?php echo form_open('', 'class="form"'); ?>
    <textarea class="form-control" name="comment" placeholder="Tulis Komentar Anda di sini"
      aria-label="With textarea"></textarea>
    <button type="submit" class="btn mb-3">Kirim</button>
    <?php echo form_close(); ?>
    <!-- </section> -->

    <section class="answer">
      <div class="tittle">
        <h1>Tanggapan (
          <?= count($response) ?>)
        </h1>
      </div>
      <div class="card">
        <?php if ($response):
          foreach ($response as $respon): ?>
            <div class="user-card">
              <div class="user-profile">
                <img class="response-image" src="<?= base_url($respon['image']) ?>">
                <p>
                  <?= $respon['name'] ?>
                </p>
              </div>
              <div class="isi">
                <?= $respon['comment'] ?>
                <div class="bottom-isi">
                  <div class="left">
                    <ul>
                      <li>
                        <i class="fa fa-heart brand-danger"></i>
                        <h5>53</h5>
                      </li>
                    </ul>
                    <!-- <ul>
                      <li>
                        <i class="fa fa-thumbs-down"></i>
                        <h5>0</h5>
                      </li>
                    </ul> -->
                    <ul>
                      <li>
                        <i class="fa fa-calendar"></i>
                        <h4>
                          <?= tanggal_indonesia(date('d-m-Y', strtotime($respon['created']))); ?>
                        </h4>
                      </li>
                    </ul>
                  </div>
                  <div class="right">
                    <ul>
                      <li>
                        <h4>07:08</h4>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; endif ?>
    </section>
  </div>
</main>

<style>
  h1 {
    font-weight: 600;
    font-size: 25px;
    margin-bottom: 10px;
  }



  p {
    margin-bottom: 20px;
    display: block;
  }

  strong {
    font-weight: bold;
  }

  em {
    font-style: italic;
  }

  ol,
  ul {
    margin-left: 20px;
    display: block;
  }

  .main-artikel textarea {
    /* margin-top: 10px; */
    padding: 10px;
    height: 200px;
    background-color: #e9e9e9;
    box-shadow: 0 4px 4px 0 rgb(129 129 129 / 50%);
    box-shadow: none;
    outline: none;
    border-radius: 10px;
    display: block;
    width: 100%;
  }

  .main-artikel .btn {
    margin-top: 20px;
    text-align: right;
    background-color: #d8d8d8;
    box-shadow: 0 1px 1px 0 rgb(129 129 129 / 50%);
    padding: 5px;
    border-radius: 5px;
    display: block;
    float: right;
  }

  .user-card {
    background: #ffffff;
    border-radius: 8px;
    margin-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
    margin-left: 30px;
  }

  .user-card .user-profile {
    display: flex;
  }

  .user-card .user-profile img {
    width: 37px;
  }

  .user-card .user-profile p {
    font-size: 18px;
    text-align: center;
    color: #3a3838;
    margin-bottom: 6px;
    margin-top: 5px;
  }

  .user-card .isi {
    background-color: #f3f0f0;
    margin-left: 38px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 8px;
  }

  .user-card .isi .bottom-isi {
    align-items: center;
    justify-content: space-between;
    padding-top: 10px;
    display: flex;
  }

  .user-card .isi .bottom-isi i {
    margin-right: 5px;
  }

  .user-card .isi .bottom-isi .left {
    display: flex;
    margin-right: 20px;
    margin-top: 10px;
  }

  .user-card .isi .bottom-isi .left ul {
    display: inline-flex;
    padding: 0;
    margin: 0;
    color: #545454;
  }

  .user-card .isi .bottom-isi .left li {
    display: inline-flex;
    margin-right: 20px;
    align-items: center;
  }

  .user-card .isi .bottom-isi .left li h5 {
    margin-left: 5px;
  }

  .user-card .isi .bottom-isi .right {
    justify-content: flex-end;
    align-content: flex-end;
    text-align: right;
    margin-top: 10px;
  }

  .user-card .isi .bottom-isi .right ul {
    display: inline-flex;
    padding: 0;
    margin: 0;
    color: #545454;
  }

  .user-card .isi .bottom-isi .right li {
    display: inline-flex;
    margin-left: 5px;
  }

  .response-image {
    width: 37px;
    height: 37px;
    border-radius: 50%;
    padding: 5px;
    border: 1px solid #EEE;

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