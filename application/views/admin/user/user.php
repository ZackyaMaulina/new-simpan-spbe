<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua User</span>
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
                        <th style="width: 80px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                        </th>
                        <th class="title" scope="col">Username</th>
                        <th class="writer" scope="col">Email</th>
                        <th class="satus" scope="col">Status User</th>
                        <th class="aksi" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="col1">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                            </th>
                            <th scope="col">
                                <?= $user['username'] ?>
                            </th>
                            <th scope="col">
                                <?= $user['email'] ?>
                            </th>
                            <th scope="col">
                                <?= $user['user_type'] ?>
                            </th>
                            <th scope="col">
                                <a href="<?= base_url('admin/users/edit/' . $user['user_id']) ?>"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href=""><i class="bi bi-trash-fill"></i></a>
                            </th>
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