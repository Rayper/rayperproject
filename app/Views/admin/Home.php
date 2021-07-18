<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/bootstrap/css/bootstrap.css"> -->
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
    <link rel="stylesheet" href="<?= base_url('/css/admin.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbarAdmin'); ?>

    <!-- Main -->
    <main>
        <section class="section-hello-admin">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 my-4">
                        <h1 class="text-center">Hello Admin !</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-feature-admin" id="featureAdmin">
            <div class="container">
                <div class="row section-card-admin justify-content-center">
                    <div class="col-sm-5 col-md-4 col-lg-3 mx-3">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="invoice" class="btn btn-card">
                                <img src="/img/Info Pemesanan.png" alt="Icon Daftar Invoice" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">Daftar Invoice</h2>
                                    <p class="card-text">Semua daftar invoice user yang telah melakukan pemesanan,
                                        seperti
                                        informasi pemesanan maupun status pembayaran</p>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 mx-3">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="uploadberita" class="btn btn-card">
                                <img src="/img/Berita.png" alt="Icon Cari Nama" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">Unggah Berita</h2>
                                    <p class="card-text">Unggah berita atau artikel mengenai pemakaman, seperti
                                        berita terkini mengenai jenazah covid-19, pohon yang bagus untuk menghias makam,
                                        dan lain-lain
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?= $this->include('templates/footeradmin'); ?>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>