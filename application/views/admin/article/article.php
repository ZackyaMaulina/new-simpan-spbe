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
                    <a class="btn1" href="<?=base_url('admin/articles/edit') ?>">
                        <i class="bi bi-pencil-square"></i>
                        Tambah Baru
                    </a>
                    <a class="btn2" href="">
                        <i class="bi bi-trash-fill"></i>
                        Hapus Item Terpilih
                    </a>
                </div>
            </div>
        </div>
        <div class="card2">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                        </th>
                        <th>Judul</th>
                        <th>Ditulis Oleh</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                            </td>
                            <td>
                                <?= $article['title'] ?>
                            </td>
                            <td>
                                <?= $article['name'] ?>
                            </td>
                            <td>
                                <?= $article['category_name'] ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/article/edit/' . $article['user_id']) ?>"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href=""><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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