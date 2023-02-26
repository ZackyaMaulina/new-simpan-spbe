<!-- main -->
<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua Tanggapan</span>
                </div>
                <!-- <div class="right">
                    <a class="btn1" href="<?=base_url('admin/forums/edit') ?>">
                        <i class="bi bi-pencil-square"></i>
                        Tambah Baru
                    </a>
                </div> -->
            </div>
        </div>
        <div class="card2">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No.</th>
                        <th>Tanggapan</th>
                        <th>Ditulis Oleh</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($response as $respon): ?>
                        <tr>
                            <td class="text-center">
                            <?=$no ?>
                            </td>
                            <td>
                                <?= $respon['comment'] ?>
                            </td>
                            <td>
                                <?= $respon['name'] ?>
                            </td>
                          
                            <td class="text-center">
                                <a href="<?= base_url()?>admin/forums_response/delete/<?= $respon['response_id']?>"><i class="bi bi-trash-fill"></i></a>
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