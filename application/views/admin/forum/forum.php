<!-- main -->
<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua Forum</span>
                </div>
                <div class="right">
                    <a class="btn1" href="">
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
                        <th>Judul Forum</th>
                        <th>Ditulis Oleh</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($forums as $forum): ?>
                        <tr>
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                            </td>
                            <td>
                                <?= $forum['title'] ?>
                            </td>
                            <td>
                                <?= $forum['name'] ?>
                            </td>
                            <td>
                                <?= $forum['category_name'] ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/article/edit/' . $forum['user_id']) ?>"><i
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