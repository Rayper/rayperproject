<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari TPU Makam Covid</title>
    <link rel="shortcut icon" href="/img/Favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/findtpu.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbarUser'); ?>

    <!-- Header -->
    <header class="text-left">
        <h1>TPU Makam Covid</h1>
    </header>
    <br>

    <!-- Modal -->
    <form action="<?= site_url('Member/feedback') ?>" method="post">
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Feedback Anda Sangat Berguna Untuk Kemajuan
                            Website Kami</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="user_id" value="<?= session()->get('user_id'); ?>">
                        <textarea class="form-control" id="feedback" rows="5" name="feedback"
                            placeholder="Isi Feedback"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-send" onClick="return sukses()">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Main -->
    <main>
        <section class="section-header-tpu" id="headerTPU">
            <form action="" method="get">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 mt-5">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                Cari TPU Per-kategori
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="/Member/caritpuall" class="dropdown-item">TPU Semua Kategori</a>
                                <a href="/Member/caritpu" class="dropdown-item">TPU Makam Baru</a>
                                <a href="/Member/caritpu3" class="dropdown-item">TPU Makam Covid</a>
                                <a href="/Member/caritpu2" class="dropdown-item">TPU Tumpang Tindih</a>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <input class="form-control mr-5" type="search" placeholder="Nama TPU/Unit" name="keyword">
                        </div>
                        <div class="col-lg-3 mt-2 ml-2">
                            <button type="submit" name="submit" class="btn btn-search">Cari</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <br>
        <section class="section-card-tpu" id="cardTPU">
            <div class="container">
                <div class="row section-card-kober">
                    <?php foreach ($datatpus as $dt) : ?>
                    <div class="col-sm-5 col-md-4 col-lg-3 my-3 mx-4">
                        <div class="card text-center" style="width: 19rem;">
                            <img src="<?= base_url('img/'.$dt['Thumbnail']) ?>" alt="Image Card TPU"
                                class="card-img-top">
                            <div class="card-body-exist">
                                <br>
                                <h4 class="card-title"><?= $dt['NamaTPU'] ?></h4>
                                <p class="text-center"><?= $dt['AlamatTPU'] ?></p>
                                <p class="text-center">Unit <?= $dt['Unit'] ?></p>
                                <p class="text-center">Kategori : <?= $dt['nama'] ?></p>
                                <p class="text-center">Hubungi : <?= $dt['Contact'] ?></p>
                                <a href="<?= $dt['Link'] ?>" class="text-center" target="_blank">Link Lokasi</a><br>
                                <a href="/member/pemesananmakamcovid/<?= $dt['tpu_id'] ?>"
                                    class="btn btn-full px-3 py-1 mt-3">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="pagination justify-content-center mt-4">
                <?php echo $pager->links('datatpu', 'bootstrap_pagination') ?>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?= $this->include('templates/footer'); ?>

    <script>
        function sukses() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Berhasil mengirimkan Feedback!',
                confirmButtonColor: '#92b74b',
                showConfirmButton: true,
            });
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="/js/sweetalert2.all.js"></script>

</body>

</html>