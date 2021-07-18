<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Makam< Tumpagn Tindih</title> <link rel="shortcut icon" href="/img/Favicon.ico">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
                integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
                crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
                crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link
                href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
                rel="stylesheet">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?= base_url('/css/pemesanan.css'); ?>">
            <link rel="stylesheet" href="<?= base_url('/css/modal.css'); ?>">
</head>

<body>


    <!-- navbar -->
    <?= $this->include('templates/navbarJargon'); ?>

    <!-- Modal Tumpang Tindih-->
    <div class="modal fade" id="tumpangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info Tumpang Tindih</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    TPU ini sudah tidak menerima lahan pemakaman baru, karena keterbatasan lahan. TPU ini menerapkan
                    sistem tumpang tindih dimana satu petak lahan hanya bisa diisi oleh beberapa orang dan harus
                    melampirkan
                    surat pernyataan tumpang tindih, yang mana surat tersebut berisi kesepakatan kedua belah pihak
                    antara
                    pihak yang mengajukan untuk tumpang tindih dengan pihak yang bersedia lahan makamnya untuk dilakukan
                    tumpang tindih
                    apakah anda bersedia untuk itu ?
                    <br>
                    <br>
                    Jika bersedia, maka terdapat nomor telepon (Contact Person) dari pihak TPU terkait yang sudah
                    tertera,
                    anda bisa langsung hubungi untuk keteranngan dan proses lebih lanjut, terima kasih :)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Main -->
    <main>
        <section class="section-form-header"></section>
        <section class="section-form-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/member/caritpu" style="color: #EEF3EF;">Cari TPU</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Form Pemesanan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-form-content">
            <div class="container">
                <div class="card">
                    <form>
                        <h1 class="text-center mt-2 mb-5">Pemesanan Makam Tumpang Tindih</h1>

                        <div class="form-group row">
                            <label for="inputNamaTpu" class="col-sm-2 col-lg-2 form-label">Yang Memesan</label>
                            <input type="hidden" name="user_id" value="<?= session()->get('user_id'); ?>">
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="NamaCustomer" value="<?= session()->get('fullname'); ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputNamaTpu" class="col-sm-2 col-lg-2 form-label">Nama TPU</label>
                            <input type="hidden" name="tpu_id" value="<?= $datatpu['tpu_id']; ?>">
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" name="NamaTPU"
                                value="<?= $datatpu['NamaTPU']; ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputKategori" class="col-sm-2 col-lg-2 form-label">Kategori</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" name="KategoriTPU"
                                value="<?= $datatpu['nama']; ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputUnitTpu" class="col-sm-2 col-lg-2 form-label">Unit TPU</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" name="UnitTPU"
                                value="<?= $datatpu['Unit']; ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputNamaAlm" class="col-sm-2 col-lg-2 form-label">Nama Almarhum</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" name="namaAlm"
                                <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>

                        <p>
                            <?= $validation->getError('namaAlm'); ?>
                        </p>

                        <div class="form-group row">
                            <label for="inputNikAlm" class="col-sm-2 col-lg-2 form-label">NIK Almarhum</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" name="nikAlm"
                                <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>

                        <p>
                            <?= $validation->getError('nikAlm'); ?>
                        </p>

                        <div class="form-group row">
                            <label for="inputTanggalKematian" class="col-2 col-lg-2 form-label">Tanggal Kematian</label>
                            <input type="date" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="tanggalKematian"
                                <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>


                        <div class="form-group row">
                            <label for="inputTanggalDikubur" class="col-2 col-lg-2 form-label">Tanggal Dikubur</label>
                            <input type="date" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="tanggaldiKubur" <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>

                        <div class="form-group row">
                            <label for="inputNamaAhliWaris" class="col-sm-2 col-lg-2 form-label">Nama Ahli Waris</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="namaAhliWaris" <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>

                        <p>
                            <?= $validation->getError('namaAhliWaris'); ?>
                        </p>

                        <div class="form-group row">
                            <label for="inputAlamatAhliWaris" class="col-sm-2 col-lg-2 form-label">Alamat Ahli
                                Waris</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="alamatAhliWaris"
                                <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>

                        <p>
                            <?= $validation->getError('alamatAhliWaris'); ?>
                        </p>

                        <div class="form-group row">
                            <label for="inputNoHP" class="col-sm-2 col-lg-2 form-label">No.HP Ahli Waris</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5"
                                name="NoHPAhliWaris" <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>">
                        </div>

                        <p>
                            <?= $validation->getError('NoHPAhliWaris'); ?>
                        </p>

                        <div class="form-group row">
                            <label for="uploadSuratKematian" class="col-sm-2 col-lg-2 form-label">Surat Kematian</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="suratKematian"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKTPAlm" class="col-sm-2 col-lg-2 form-label">KTP Alm/Almh</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="KTPAlm"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKKAlm" class="col-sm-2 col-lg-2 form-label">KK Alm/Almh</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="KKAlm"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKTPAhliWaris" class="col-sm-2 col-lg-2 form-label">KTP Ahli Waris</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="KTPAhliWaris"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKKAhliWaris" class="col-sm-2 col-lg-2 form-label">KK Ahli Waris</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="KKAhliWaris"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKTPSaksi" class="col-sm-2 col-lg-2 form-label">KTP Saksi/Kerabat</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="KTPSaksi"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKKSaksi" class="col-sm-2 col-lg-2 form-label">KK Saksi/Kerabat</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="KKSaksi"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <label for="suratpernyataan" class="col-sm-2 col-lg-2 form-label">Surat Pernyataan Tumpang
                                Tindih</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" name="suratpernyataan"
                                accept=".pdf, .jpg, .png, .jpeg">
                        </div>

                        <div class="form-group row">
                            <button class="btn btn-secondary d-grid gap-2 col-lg-1 col-sm-2 mx-auto" type="submit">Pesan</button>
                        </div>
                    </form>
                </div>
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
                text: 'Pemesanan Makam telah berhasil',
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="/js/sweetalert2.all.js"></script>

</body>

</html>