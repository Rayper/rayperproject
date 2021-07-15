<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Invoice</title>
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
    <link rel="stylesheet" href="<?= base_url('/css/invoiceadmin.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbarAdmin'); ?>

    <!-- Main -->
    <main>
        <section class="table-invoice-admin">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped my-3">
                        <thead>
                            <tr>
                                <th scope="col">Id Invoice</th>
                                <th scope="col">Tanggal Pemesanan</th>
                                <th scope="col">Nama Almarhum</th>
                                <th scope="col">NIK Almarhum</th>
                                <th scope="col">Tanggal Kematian</th>
                                <th scope="col">Nama Ahli Waris</th>
                                <th scope="col">Alamat Ahli Waris</th>
                                <th scope="col">No. HP Ahli Waris</th>
                                <th scope="col">Nama TPU</th>
                                <th scope="col">Unit TPU</th>
                                <th scope="col">Blok TPU</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jenis Pemakaman</th>
                                <th scope="col">Status Pembayaran</th>
                                <th scope="col">Konfirmasi</th>
                                <th scope="col">Tolak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datainvoice as $dt) : ?>
                            <tr>
                                <td><?= $dt['invoice_id'] ?></td>
                                <td><?= $dt['tanggalpemesanan'] ?></td>
                                <td><?= $dt['namaAlm'] ?></td>
                                <td><?= $dt['nikAlm'] ?></td>
                                <td><?= $dt['tanggalKematian'] ?></td>
                                <td><?= $dt['namaAhliWaris'] ?></td>
                                <td><?= $dt['alamatAhliWaris'] ?></td>
                                <td><?= $dt['NoHPAhliWaris'] ?></td>
                                <td><?= $dt['NamaTPU'] ?></td>
                                <td><?= $dt['UnitTPU'] ?></td>
                                <td><?= $dt['Tipe'] ?></td>
                                <td><?= $dt['Harga'] ?></td>
                                <td><?= $dt['KategoriTPU'] ?></td>
                                <td><?= $dt['ket'] ?></td>
                                <td>
                                    <a href="/admin/cekbukti/<?= $dt['invoice_id'] ?>"
                                        class="btn btn-secondary btn-sm px-3">Aksi</a>
                                </td>
                                <td>
                                    <a href="/admin/penolakan/<?= $dt['invoice_id'] ?>" class="btn btn-danger ">Aksi</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="pagination justify-content-center mt-4">
                    <?php echo $pager->links('datainvoice', 'bootstrap_pagination') ?>
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