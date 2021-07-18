<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
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
    <link rel="stylesheet" href="<?= base_url('/css/Invoice.css'); ?>">

</head>

<body>

    <!-- navbar -->
    <?= $this->include('templates/navbarJargon'); ?>


    <!-- Main -->
    <main>
        <section class="section-invoice-header"></section>
        <section class="section-invoice-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/member/caritpu" style="color: #EEF3EF;">Cari TPU</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a style="color: #EEF3EF;">Form Pemesanan</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Invoice Pemesanan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-invoice-content">
            <div class="container">
                <div class="card">
                    <section class="section-invoice-header">
                        <div class="row">
                            <?php foreach ($detailinvoice as $dt) : ?>
                            <div class="col-lg-9 py-5 px-5">
                                <img src="/img/Logo Kober V1.png" alt="Logo KOBER" width="220px" height="53px">
                            </div>
                            <div class="col-lg-3 py-4">
                                <h5>INVOICE</h5>
                                <ul class="list-unstyled">
                                    <li><?= $dt['tanggalpemesanan'] ?></li>
                                    <?php
                                        $id = 'KBR0';
                                        $invoice = $id . '' . $dt['invoice_id'] ?>
                                    <li><?= $invoice ?></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="section-invoice-info">
                        <div class="row">
                            <div class="col-lg-6 pt-3 px-4">
                                <h5>Izin Penggunaan Tanah Makam (IPTM)</h5>
                                <p class="disclaimer">* Biaya sudah termasuk retribusi selama 1 tahun, pemeliharaan, dan
                                    pajak TPU</p>
                                <p>Rincian: </p>
                                <table class="info">
                                    <tbody>
                                        <tr>
                                            <td>Nama Alm</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?= $dt['namaAlm'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>NIK Alm</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?= $dt['nikAlm'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>TPU</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?= $dt['NamaTPU'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Blok</td>
                                            <td></td>
                                            <td>:</td>
                                            <td><?= $dt['Tipe'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <p>Lakukan Pembayaran ke Nomor Rekening <b>527129846 (BCA An. KOBER)</b></p>
                            </div>
                        </div>
                    </section>
                    <section class="section-invoice-border"></section>
                    <section class="section-invoice-total">
                        <div class="row justify-content-end">
                            <div class="col-lg-4 pt-4">
                                <table class="total">
                                    <tbody>
                                        <tr>
                                            <td>Total</td>
                                            <td>:</td>
                                            <td class="number">Rp. <?= $dt['Harga'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pajak</td>
                                            <td>:</td>
                                            <td class="number">Rp. 2000</td>
                                        </tr>
                                        <?php $harga = $dt['Harga'] + 2000 ?>
                                        <tr>
                                            <td>Total yang dibayarkan</td>
                                            <td></td>
                                            <td class="number2">Rp. <?= $harga ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section class="section-invoice-footer">
                        <div class="row">
                            <div class="col-lg-3 py-5 px-5">
                                <h6>Ditujukan Kepada Ahli Waris</h6>
                                <ul class="list-unstyled">
                                    <li><?= $dt['namaAhliWaris'] ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 py-5 px-5">
                                <h6>Status</h6>
                                <ul class="list-unstyled">
                                    <?php if($dt['ket'] == 'Lunas') : ?>
                                    <li class="statuslunas"><?= $dt['ket'] ?></li>
                                    <?php else : ?>
                                    <li class="status"><?= $dt['ket'] ?></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 py-5 px-5">
                                <h6>Note</h6>
                                <ul class="list-unstyled">
                                    <li>Tunjukan Invoice ini kepada pihak TPU yang tertera
                                        diatas untuk melanjutkan prosesi pemakaman, jika
                                        status belum berubah atau ada penolakan bisa hubungi pihak kami:
                                        <br>
                                        <br>
                                        support@koberapps.online / 085719644122
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </section>
                    <a href="/member/home" class="btn btn-home">
                        Beranda
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>