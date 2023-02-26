<!-- main -->
<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua Pertanyaan</span>
                </div>
            </div>
        </div>
        <div class="card2">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Dibuat</th>
                        <th>Status</th>
                        <th style="text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($helpdesks as $helpdesk): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no ?>
                            </td>
                            <td>
                                <?= $helpdesk['name'] ?>
                            </td>
                            <td>
                                <?= $helpdesk['email'] ?>
                            </td>
                            <td>
                                <?= $helpdesk['date_published'] ?>
                            </td>
                            <td>
                                <?= $helpdesk['status'] === '1' ? '<span style="color:green;">Telah Dijawab</span>' : '<span style="color:Red;">Belum Dijawab</span>' ?>
                            </td>
                            <td class="text-center" style="text-align:center;">
                                <a href="<?= base_url() ?>admin/helpdesk/view/<?= $helpdesk['helpdesk_id'] ?>"><i
                                        class="bi bi-eye"></i></a>
                                <a href="<?= base_url() ?>admin/helpdesk/delete/<?= $helpdesk['helpdesk_id'] ?>"><i
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