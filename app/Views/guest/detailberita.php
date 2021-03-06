<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link rel="shortcut icon" href="/img/Favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/detailberita.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbar'); ?>

    <!-- Main -->
    <main>
        <section class="section-detail-breadcrumb my-2">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb pt">
                                <li class="breadcrumb-item">
                                    <a href="/Guest/liatberita" style="color: #EEF3EF;">Berita</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Detail Berita
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-detail-berita">
            <div class="container">
                <h1 class="my-3"><?= $detailberita['Judul']; ?></h1>
                <div class="media my-3">
                    <img src="/img/User.png" alt="Icon User">
                    <div class="media-body">
                        <h5 class="text-left">Oleh : <?= $detailberita['nama']; ?></h5>
                        <p class="text-left mb-0"><?= $detailberita['tanggalupload']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <img src="<?= base_url('Thumbnail_berita/'.$detailberita['Thumbnail']) ?>" class="img-fluid"
                            alt="Responsive Image">
                    </div>
                </div>
                <p class="my-3"><?= $detailberita['Isi']; ?></p>
                <br>
                <a href="/Guest/liatberita">
                    << Kembali ke Halaman Berita</a> </div> </section> </main> <!-- Footer -->
                        <?= $this->include('templates/footerguest'); ?>





                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                            crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                            crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
                            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
                            crossorigin="anonymous"></script>
</body>

</html>