<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Pembayaran</title>
    <link rel="shortcut icon" href="/img/Favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/cekpembayaran.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('templates/navbarUser'); ?>

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
        <section class="cek-pembayaran">
            <div class="card">
                <div class="card-header">
                    Upload Bukti Pembayaran
                </div>
                <?php foreach ($datainvoice as $dt) : ?>
                <form method="post" action="<?= site_url('Member/uploadbukti/'.$dt['invoice_id']) ?>"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p class="judul">Silahkan Upload Bukti Pembayaran dengan pembayaran ke Nomor Rekening <b>527129846 (BCA An. KOBER)</b></p>
                            <div class="form-group row">
                                <input type="hidden" name="invoice_id" value="<?= $dt['invoice_id']; ?>">
                                <input type="file" class="form-control-file form-control-sm col-sm-6 ml-2" name="buktipembayaran"
                                    accept=".pdf, .jpg, .png, .jpeg" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button class="btn btn-secondary" type="submit" onClick="return suksesupload()">Upload</button>
                                </div>
                            </div>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
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

        function suksesupload() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Berhasil Upload Bukti Pembayaran!',
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