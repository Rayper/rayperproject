<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="/img/Favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/Homeblogin.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbar'); ?>

    <!-- Header -->
    <header class="text-center">
        <h1>
            Pesan Makam Dengan Mudah
            <br>
            Hanya Sekali Klik
        </h1>
        <p class="mt-3">
            Temukan TPU yang tersedia, bagaimana prosedur
            <br>
            pemakaman, dan pesan makam dengan cepat dan aman
        </p>
        <a href="#procedure" class="btn btn-start px-4 py-2 mt-3">
            Mulai
        </a>
    </header>
    <!-- Main -->
    <main>
        <!-- Description -->
        <section class="section-description" id="description">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-short-description">
                        <h2>Apa Itu Kober ?</h2>
                        <p>Kober adalah aplikasi berbasis web untuk membantu masyarakat
                            <br>
                            melakukan <b>pemesanan pemakaman secara online</b></p>
                        <a href="/guest/tentangkami" class="btn btn-read px-4 py-2">
                            Baca lebih lanjut
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature -->
        <section class="section-feature" id="feature">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-feature-title">
                        <h2>Fitur Utama Kami</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-feature-content" id="featureContent">
            <div class="container">
                <div class="row section-feature-kober justify-content-center">
                    <div class="col-sm-5 col-md-4 col-lg-3 mx-3">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="/auth/login" class="btn btn-feature">
                                <img src="/img/Cari TPU.png" alt="Icon Cari TPU" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">Cari TPU</h2>
                                    <p class="card-text">Temukan informasi seputar TPU dari
                                        berbagai kota, cek ketersedian petak
                                        makam baru, sistem tumpang tindih,
                                        dan khusus covid-19</p>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 mx-3">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="/auth/login" class="btn btn-feature">
                                <img src="/img/Cari Nama.png" alt="Icon Cari Nama" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">Cari Nama</h2>
                                    <p class="card-text">Temukan seluruh informasi mengenai
                                        database jenazah yang terdaftar disini,
                                        seperti nama jenazah, tanggal dikubur,
                                        tempat dimakamkan, dan lain-lain </p>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 mx-3">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="/auth/login" class="btn btn-feature">
                                <img src="/img/Info Pemesanan.png" alt="Icon Info Pemesanan" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">Info Pemesanan</h2>
                                    <p class="card-text">Daftar tentang semua data invoice
                                        pemesanan atau IPTM, seperti informasi
                                        pembayaran dan status pembayaran </p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Procedure -->
        <section class="section-procedure" id="procedure">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-procedure-title">
                        <h2>Cara Pemesanan</h2>
                        <p>Pelajari dan ikuti prosedur dibawah ini untuk melakukan pemesanan</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-procedure-content" id="procedureContent">
            <div class="container">
                <ul class="list-procedure">
                    <li class="media my-4">
                        <img src="/img/Langkah 1.png" class="mr-5" alt="Icon Langkah 1">
                        <div class="media-body">
                            <h2 class="body-number">Langkah 1</h2>
                            <h2 class="body-heading">Daftarkan Akunmu di Aplikasi Kami </h2>
                            <p class="body-description">Daftarkan akunmu dengan cara mengisi data yang dibutuhkan,
                                setelah daftar data kamu akan kami verifikasi.</p>
                            <p class="body-disclaimer">* Jika sudah daftar akun, abaikan lagkah ini</p>
                        </div>
                    </li>

                    <li class="media my-2">
                        <img src="/img/Langkah 2.png" class="mr-5" alt="Icon Langkah 2">
                        <div class="media-body">
                            <h2 class="body-number">Langkah 2</h2>
                            <h2 class="body-heading">Cari TPU Untuk Memesan Makam</h2>
                            <p class="body-description">Temukan TPU disekitar anda atau TPU yang diinginkan di fitur
                                Cari TPU,
                                setelah itu klik pesan untuk melanjutkan ke prosedur selanjutnya.</p>
                            <p class="body-disclaimer">* Terdapat 3 metode untuk pemakaman:
                                <br>
                                1. Makam Baru
                                <br>
                                2. Makam Covid
                                <br>
                                3. Tumpang Tindih</p>
                        </div>
                    </li>

                    <li class="media my-2">
                        <img src="/img/Langkah 3.png" class="img-custom mr-5" alt="Icon Langkah 3">
                        <div class="media-body">
                            <h2 class="body-number">Langkah 3</h2>
                            <h2 class="body-heading">Isi Form Pemesanan</h2>
                            <p class="body-description">Isi dan lengkapi data ahli waris dan jenazah, serta upload
                                dokumen yang diperlukan
                                sebagai persyaratan pemakaman bisa berupa foto atau hasil scan.
                                Berikut dokumen yang diperlukan:
                                <br>
                                - Surat Kematian, KTP, dan KK Jenazah
                                <br>
                                - KTP dan KK Ahli Waris
                                <br>
                                - KTP dan KK Saksi/Kerabat
                                <br>
                                - Surat Pernyataan Tumpang Tindih *</p>
                            <p class="body-disclaimer">* Khusus metode Tumpang Tindih</p>
                        </div>
                    </li>

                    <li class="media my-2">
                        <img src="/img/Langkah 4.png" class="mr-5" alt="Icon Langkah 4">
                        <div class="media-body">
                            <h2 class="body-number">Langkah 4</h2>
                            <h2 class="body-heading">Mendapatkan Invoice Pemesanan / Izin Penggunaan Tanah Makam (IPTM)
                            </h2>
                            <p class="body-description">Setelah mengisi form pemesanan anda diarahkan ke halaman info pemesanan, berikut penjelasan:
                                <br>
                                - Invoice: Klik detail, untuk melihat invoice / IPTM pemesanan anda, lanjut melakukan pembayaran sesuai harga yang tertera.  
                                <br> 
                                - Pembayaran: Klik upload bukti pembayaran, untuk mengunggah bukti pembayaran.
                                <br>
                                <br>
                                Terakhir jika sudah melakukan langkah diatas, anda diminta untuk menunggu konfirmasi dari admin. Jika status pembayaran sudah lunas,
                                selamat anda telah menyelesaikan pemesanan pemakaman secara online simpan dan tunjukan invoice atau IPTM kepada pihak TPU yang
                                terkait ! 
                            </p>
                            <p class="body-disclaimer">* Jika ada kendala pada saat pemesanan maupun pembayaran segera hubungi kami!</p>
                            <a href="/auth/register" class="btn btn-register px-4 py-2 mr-2">
                                Daftar Akun
                            </a>
                            <a href="/guest/faq" class="btn btn-faq px-4 py-2">
                                Lihat FAQ
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>



    </main>

    <!-- footer -->
    <?= $this->include('templates/footerguest'); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('/js/retina.min.js'); ?>"></script>
</body>

</html>