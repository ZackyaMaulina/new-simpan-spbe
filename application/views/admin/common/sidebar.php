
    <!-- sidebar -->
    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"><i class="bi bi-list"></i></label>
    <div class="sidebar-dashboard">
        <ul>
            <li>
                <a href="">
                    <i class="bi bi-house-door-fill"></i>
                    <span class="beranda">Beranda</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-newspaper"></i>
                    <span class="beranda">Artikel</span>
                </a>
                <ul>
                    <li><a class="active" href="<?=base_url('admin/articles') ?>">Semua Artikel</a></li>
                    <li><a href="<?=base_url('admin/articles/edit') ?>">Tambah Artikel</a></li>
                    <li><a href="<?=base_url('admin/categories') ?>">Kategori</a></li>
                    <li><a href="<?=base_url('admin/comments') ?>">Komentar</a></li>
                </ul>
            </li>
            <!-- <li>
                <a href="">
                    <i class="bi bi-file-break-fill"></i>
                    <span class="beranda">Halaman</span>
                </a>
                <ul>
                    <li><a href="">Semua Halaman</a></li>
                    <li><a href="">Tambah Halaman</a></li>
                </ul>
            </li> -->
            <li>
                <a href="">
                    <i class="bi bi-chat-left-dots-fill"></i>
                    <span class="beranda">Forum</span>
                </a>
                <ul class="forum-show">
                    <li><a href="<?=base_url('admin/forums') ?>">Semua Forum</a></li>
                    <li><a href="<?=base_url('admin/forums/edit') ?>">Tambah Forum</a></li>
                    <li><a href="<?=base_url('admin/categories') ?>">Kategori</a></li>
                    <li><a href="">Komentar</a></li>
                    <li><a href="">Jawaban</a></li>
                </ul>
            </li>
            <!-- <li>
                <a href="">
                    <i class="bi bi-plugin"></i>
                    <span class="beranda">Plugin</span>
                </a>
                <ul class="forum-show">
                    <li><a href="">Semua Plugin</a></li>
                    <li><a href="">Tambah Plugin</a></li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="">
                    <i class="bi bi-gear-fill"></i>
                    <span class="beranda">Pengaturan</span>
                </a>
                <ul class="forum-show">
                    <li><a href="">Umum</a></li>
                </ul>
            </li> -->
            <li>
                <a href="">
                    <i class="bi bi-people-fill"></i>
                    <span class="beranda">Pengguna</span>
                </a>
                <ul class="forum-show">
                    <li><a href="<?=base_url('admin/users') ?>">Semua User</a></li>
                </ul>
            </li>
        </ul>
    </div>
