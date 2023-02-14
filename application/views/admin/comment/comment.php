<!-- main -->
<section id="main-administrator">
    <div class="content">
        <div class="card-admin">
            <div class="card1">
                <div class="left">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Semua Komentar</span>
                </div>
            </div>
        </div>
        <div class="card2">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No.</th>
                        <th>Komentar</th>
                        <th>Ditulis Oleh</th>
                        <th>Topik</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach ($comments as $comment): ?>
                        <tr>
                            <td class="text-center">
                            <?= $no ?>
                            </td>
                            <td>
                                <?= $comment['comment'] ?>
                            </td>
                            <td>
                                <?= $comment['user'] ?>
                            </td>
                            <td>
                                <?= $comment['category_name'] ?>
                            </td>
                            <td class="text-center">
                                <a href=""><i class="bi bi-trash-fill"></i></a>
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