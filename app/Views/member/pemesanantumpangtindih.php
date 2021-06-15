<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Makam Tumpang Tindih</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('/css/pemesanan.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/modal.css'); ?>">
</head>
<body>
    

    <!-- navbar -->
    <?= $this->include('templates/navbarJargon'); ?>
    
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <i style="font-size:65px" class="fa">&#xf00c;</i>
                        <!-- <i class="material-icons">&#xE876;</i> -->
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>Selamat!</h4>	
                    <p>Pemesanan Makam Telah Berhasil</p>
                    <p>Silahkan klik button di bawah untuk melihat Invoice Pemesanan</p>

                    <a href="/member/getinvoice">
                        <button class="btn btn-success"><span>Lihat Invoice</span></button>
                    </a>
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
                            <label for="inputNamaTpu" class="col-sm-2 col-lg-2 form-label">Nama TPU</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="NamaTPU" value="<?= $datatpu['NamaTPU']; ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputKategori" class="col-sm-2 col-lg-2 form-label">Kategori</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="nama" value="<?= $datatpu['nama']; ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputUnitTpu" class="col-sm-2 col-lg-2 form-label">Unit TPU</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="Unit" value="<?= $datatpu['Unit']; ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <label for="inputBlokTpu" class="col-sm-2 col-lg-2 form-label">Blok TPU</label>
                            <select class="form-select form-select-sm col-lg-5 col-sm-5">
                                <option selected>Pilih Blok TPU</option>
                                <?php foreach ($bloktpu as $blok) : ?>
                                    <option value=""><?= $blok['Tipe']; ?> | Kapasitas : <?= $blok['Kapasitas']; ?> | Harga : <?= $blok['Harga']; ?></option>
                                <?php endforeach; ?>  
                              </select>
                        </div>

                        <div class="form-group row">
                            <label for="inputNamaAlm" class="col-sm-2 col-lg-2 form-label">Nama Almarhum</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="namaAlm">
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputNikAlm" class="col-sm-2 col-lg-2 form-label">NIK Almarhum</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="nikAlm">
                        </div>

                        <div class="form-group row">
                            <label for="inputTanggalKematian" class="col-2 col-lg-2 form-label">Tanggal Kematian</label>
                            <input type="date" class="form-control form-control-sm col-lg-5 col-sm-5" id="tanggalKematian">
                        </div>

                        <div class="form-group row">
                            <label for="inputTanggalDikubur" class="col-2 col-lg-2 form-label">Tanggal Dikubur</label>
                            <input type="date" class="form-control form-control-sm col-lg-5 col-sm-5" id="tanggalKematian">
                        </div>

                        <div class="form-group row">
                            <label for="inputNamaAhliWaris" class="col-sm-2 col-lg-2 form-label">Nama Ahli Waris</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="namaAhliWaris">
                        </div>

                        <div class="form-group row">
                            <label for="inputAlamatAhliWaris" class="col-sm-2 col-lg-2 form-label">Alamat Ahli Waris</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="alamatAhliWaris">
                        </div>

                        <div class="form-group row">
                            <label for="inputNoHP" class="col-sm-2 col-lg-2 form-label">No.HP Ahli Waris</label>
                            <input type="text" class="form-control form-control-sm col-lg-5 col-sm-5" id="NoHPAhliWaris" >
                        </div>

                        <div class="form-group row">
                            <label for="uploadSuratKematian" class="col-sm-2 col-lg-2 form-label">Surat Kematian</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="suratKematian">
                        </div>
                        
                        <div class="form-group row">
                            <label for="uploadKTPAlm" class="col-sm-2 col-lg-2 form-label">KTP Alm/Almh</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="KTPAlm">
                        </div>
                        
                        <div class="form-group row">
                            <label for="uploadKKAlm" class="col-sm-2 col-lg-2 form-label">KK Alm/Almh</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="KKAlm">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKTPAhliWaris" class="col-sm-2 col-lg-2 form-label">KTP Ahli Waris</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="KTPAhliWaris">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKKAhliWaris" class="col-sm-2 col-lg-2 form-label">KK Ahli Waris</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="KKAhliWaris">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKTPSaksi" class="col-sm-2 col-lg-2 form-label">KTP Saksi/Kerabat</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="KTPSaksi">
                        </div>

                        <div class="form-group row">
                            <label for="uploadKKSaksi" class="col-sm-2 col-lg-2 form-label">KK Saksi/Kerabat</label>
                            <input type="file" class="form-control-file col-lg-5 col-sm-5" id="KKSaksi">
                        </div>
                        
                        <div class="form-group row">
                                <div class="col-sm-10">
                                <a href="#myModal" class="btn btn-success" data-toggle="modal">Pesan</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    

    <!-- footer -->
    <?= $this->include('templates/footer'); ?>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>