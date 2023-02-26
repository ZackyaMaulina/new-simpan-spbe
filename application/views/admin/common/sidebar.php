
    <!-- sidebar -->
    <input type="checkbox" id="toggle">
    <label class="side-toggle" for="toggle"><i class="bi bi-list"></i></label>
    <div class="sidebar-dashboard">
        <ul>
            
            <li>
                <a href="">
                    <i class="bi bi-newspaper"></i>
                    <span class="beranda">Artikel</span>
                </a>
                <ul>
                    <li><a class="active" href="<?=base_url('admin/articles') ?>">Semua Artikel</a></li>
                    <li><a href="<?=base_url('admin/articles/edit') ?>">Tambah Artikel</a></li>
                    <li><a href="<?=base_url('admin/categories') ?>">Kategori</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-chat-left-dots-fill"></i>
                    <span class="beranda">Forum</span>
                </a>
                <ul class="forum-show">
                    <li><a href="<?=base_url('admin/forums') ?>">Semua Forum</a></li>
                    <li><a href="<?=base_url('admin/categories') ?>">Kategori</a></li>
                    <li><a href="<?=base_url('admin/forums_response') ?>">Tanggapan</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                <i class="bi bi-question-square-fill"></i>
                    <span class="beranda">Helpdesk</span>
                </a>
                <ul class="forum-show">
                    <li><a href="<?=base_url('admin/helpdesk') ?>">Semua Pertanyaan</a></li>
                </ul>
            </li>
            
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
