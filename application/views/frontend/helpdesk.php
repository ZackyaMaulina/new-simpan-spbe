<!-- Main -->
<main class="service">
    <div class="content">
        <div class="home-text">
            <div class="tittle">
                <h1>Help Desk</h1>
                <!-- <p>Ada yang bisa kami bantu ?</p> -->
            </div>
        </div>
    </div>
    <div class="left">
        <div class="topic-tittle">
            <h1>Pertanyaan Yang Sering Muncul</h1>
        </div>

        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-header">
                    Pertanyaan 1
                </div>
                <div class="accordion-content">
                    Ini Jawaban
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    Pertanyaan 2
                </div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi sed lectus
                    sollicitudin laoreet. Donec vestibulum enim at quam congue consectetur. Sed vel ultrices eros.
                    Fusce aliquam libero ac turpis rutrum ullamcorper. Ut maximus diam sed felis varius, vel
                    suscipit nunc lobortis.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    Pertanyaan 3
                </div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi sed lectus
                    sollicitudin laoreet. Donec vestibulum enim at quam congue consectetur. Sed vel ultrices eros.
                    Fusce aliquam libero ac turpis rutrum ullamcorper. Ut maximus diam sed felis varius, vel
                    suscipit nunc lobortis.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    Pertanyaan 4
                </div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi sed lectus
                    sollicitudin laoreet. Donec vestibulum enim at quam congue consectetur. Sed vel ultrices eros.
                    Fusce aliquam libero ac turpis rutrum ullamcorper. Ut maximus diam sed felis varius, vel
                    suscipit nunc lobortis.
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    Pertanyaan 5
                </div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi sed lectus
                    sollicitudin laoreet. Donec vestibulum enim at quam congue consectetur. Sed vel ultrices eros.
                    Fusce aliquam libero ac turpis rutrum ullamcorper. Ut maximus diam sed felis varius, vel
                    suscipit nunc lobortis.
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php echo form_open('', 'class="form"'); ?>
    <div class="right">
        <div class="form">
            <div class="form-tittle">Silahkan kirimkan pertanyaan anda melalui form berikut.</div>
            <div class="card-form">
                <div class="form-group">
                    <p for="">Nama Anda</p>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <p for="">E-mail Anda</p>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <p for="">Message</p>
                    <textarea name="messages" id="" rows="5" placeholder="Tulis Pertanyaan Anda di sini...."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</main>

<script>
    tinymce.init({
        selector: '#mytextarea',
        content_css: "<?= ADMIN_ASSETS_URL ?>tinymce.content.css",
        height: 250,
    });

    //Get all accordion items
    const accordionItems = document.querySelectorAll('.accordion-item');

    // Add event listener to each accordion header
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            // Toggle the active class on the accordion item
            item.classList.toggle('active');
            // Toggle the show class on the accordion content
            const content = item.querySelector('.accordion-content');
            content.classList.toggle('show');
        });
    });
</script>

<style>
    h1 {
        font-weight: 600;
        font-size: 25px;
        margin-bottom: 10px;
    }

    .left .topic-title h1 {
        margin-top: 20px;
    }


    .service .left {
        display: flex-start;
        flex-basis: 50%;
        /* position: fixed; */
    }

    .service .content .home-text {
        margin-top: 80px;
    }

    /* .service .content .home-text .title {
        margin-bottom: 50px;
    } */

    .main-all .content .list-menu {
        gap: 40px;
        padding-right: 80px;
    }

    .service .form .card-form {
        width: 100%;
    }

    .service .categories .widget-categories2 {
        margin-top: 50px;

    }

    .service .right {
        flex-basis: 50%;
        display: flex-end;
    }

    .service .categories .widget-categories2 .topic .list {
        width: 100%;
        height: auto;
    }

    .service .form .form-tittle {
        text-align: center;
    }

    .accordion {
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        margin-top: 20px;
        max-width: 100%;
        width: 600px;
        /* Mengubah lebar accordion menjadi responsif */
    }

    .accordion-item {
        border-bottom: 1px solid #ccc;
        /* border-radius: 15px; */
    }

    .accordion-header {
        background-color: #161a3f;
        color: white;
        cursor: pointer;
        font-weight: bold;
        padding: 10px;
    }

    .accordion-header:hover {
        background-color: #1a1a1a;
    }

    .accordion-content {
        display: none;
        padding: 10px;
        max-height: 0;
        transition: max-height 0.2s ease-out;
    }

    .show {
        display: block;
        max-height: 100%; /* Menampilkan konten accordion */
    }

    .active .accordion-header {
        background-color: #161a3f;
    }

    @media screen and (max-width: 600px) {
        .accordion {
            width: 100%;
            /* Mengubah lebar accordion ketika layar kecil */
        }

        .accordion-header {
            font-size: 1.2rem;
            /* Mengubah ukuran font untuk judul accordion pada layar kecil */
        }

        .accordion-content {
            font-size: 1.1rem;
            /* Mengubah ukuran font untuk isi accordion pada layar kecil */
        }
    }
</style>