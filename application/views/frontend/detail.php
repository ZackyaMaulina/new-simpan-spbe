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


      <?php if ($article): ?>

        <div class="article">
          <h1 style="margin-bottom: 20px;">
            <?= $article['title']; ?>
          </h1>

          <div class="main_blog_image">
            <img style="width: 100%;" alt="" src="<?php echo base_url($article['image']); ?>" />
          </div>
          <?php echo $article['content']; ?>
        </div>

      <?php else: ?>
        <?php $this->load->view('frontend/404.php'); ?>
      <?php endif; ?>

      <div class="conten-footer">
        <div class="left">
          <ul>
            <li>
              <h4>
                <?php if ($article['user_id']): ?>
                  <a style="color: #444;" href="#"><i class="fa fa-user"></i>
                    Penulis :
                    <?php echo $article['name'] ?>
                  </a>
                <?php endif ?>
              </h4>
            </li>
            <li>
              <i class="fa fa-calendar"></i>
              <h4>
                <?= $article['date_published'] ?>
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
   
  </div>
</main>

<style>
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

ol, ul {
  margin-left: 20px;
  display: block;
}

li {

}




</style>