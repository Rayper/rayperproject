<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Berita</title>
    <link rel="shortcut icon" href="/img/Favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/berita.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbarAdmin'); ?>

    <!-- Main -->
    <main>
        <section class="section-form-news">
            <div class="container">
                <div class="card">
                    <form method="post" action="<?= site_url('Admin/prosesberita') ?>" enctype="multipart/form-data">

                        <h1 class="text-center my-3">Unggah Berita</h1>

                        <div class="form-group row">
                            <label for="inputJudulBerita" class="col-sm-2 col-lg-2 form-label">Yang Mengupload</label>
                            <input type="text" placeholder="Nama Pengguna" name="nama"
                                class="form-control form-control-sm col-lg-5 col-sm-5"
                                value="<?= session()->get('fullname'); ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputJudulBerita" class="col-sm-2 col-lg-2 form-label">Judul Berita</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" name="Judul"
                                id="judulBerita">
                        </div>

                        <div class="form-group row">
                            <label for="inputTanggalUpload" class="col-2 col-lg-2 form-label">Tanggal Upload</label>
                            <?php date_default_timezone_set('Asia/Jakarta'); $date = date('d/m/Y H:i', time());?>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="tanggalupload" value="<?= $date ?>">
                        </div>

                        <div class="form-group row">
                            <label for="uploadThumbnailBerita" class="col-sm-2 col-lg-2 form-label">Upload
                                Thumbnail</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="Thumbnail"
                                id="thumbnailBerita">
                        </div>

                        <div class="form-group row">
                            <label for="inputIsiBerita" class="col-sm-2 col-lg-2 form-label">Isi Berita</label>
                            <textarea class="form-control col-lg-9 col-sm-9" rows="15" id="Isi" name="Isi"></textarea>
                        </div>

                        <div class="form-group row">
                            <button class="btn btn-upload d-grid gap-2 col-lg-1 col-sm-2 mx-auto" type="submit"
                                onClick="return sukses()">Unggah</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?= $this->include('templates/footeradmin'); ?>

    <script>
        function sukses() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Upload Berita telah berhasil',
                confirmButtonColor: '#92b74b',
                showConfirmButton: true,
            });
        }
    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="/js/sweetalert2.all.js"></script>

</body>

</html>