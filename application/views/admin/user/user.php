<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua User</span>
                </div>
                <div class="right">
                    <a class="btn1" href="<?=base_url('admin/users/edit') ?>">
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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status User</th>
                        <th style="text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($users as $user): ?>
                        <tr class="col1">
                            <td class="text-center">
                            <?=$no ?>
                            </td>
                            <td>
                                <?= $user['username'] ?>
                            </td>
                            <td>
                                <?= $user['email'] ?>
                            </td>
                            <td>
                                <?= $user['user_type'] ?>
                            </td>
                            <td style="text-align:center;">
                                <a href="<?= base_url('admin/users/edit/' . $user['user_id']) ?>"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url()?>admin/users/delete/<?= $user['user_id']?>"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    <?php  $no++; endforeach; ?>
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