<!-- main -->
<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua User</span>
                </div>
                <div class="right">
                    <a class="btn1" href="<?= base_url('admin/articles/edit') ?>">
                        <i class="bi bi-pencil-square"></i>
                        Tambah Baru
                    </a>
                </div>
            </div>
        </div>
        <div class="card2">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No.</th>
                        <th>Judul</th>
                        <th >Ditulis Oleh</th>
                        <th>Kategori</th>
                        <th style="text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($articles as $article): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no ?>
                            </td>
                            <td>
                                <?= $article['title'] ?>
                            </td>
                            <td >
                                <?= $article['name'] ?>
                            </td>
                            <td>
                                <?= $article['category_name'] ?>
                            </td>
                            <td class="text-center" style="text-align:center;">
                                <a href="<?= base_url() ?>admin/articles/edit/<?= $article['article_id'] ?>"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url() ?>admin/articles/delete/<?= $article['article_id'] ?>"><i
                                        class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        <?php $no++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>