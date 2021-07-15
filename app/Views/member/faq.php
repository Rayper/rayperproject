<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faq</title>
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
  <link rel="stylesheet" href="<?= base_url('/css/faq.css'); ?>">
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
            <h5 class="modal-title" id="exampleModalLabel">Feedback Anda Sangat Berguna Untuk Kemajuan Website Kami</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="user_id" value="<?= session()->get('user_id'); ?>">
            <textarea class="form-control" id="feedback" rows="5" name="feedback" placeholder="Isi Feedback"></textarea>
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
    <section class="section-faq" id="faq">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 section-faq-title">
            <h2>FAQ</h2>
            <p>Tanya Jawab Yang Sering Diajukan</p>
          </div>
          <div class="col-sm-9 section-faq-content pl-0">
            <div class="accordion" id="accordionFaq">
              <!-- FAQ 1 -->
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Apa sih tujuan dibuat Kober ini ?
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFaq">
                  <div class="card-body">
                    Memudahkan masyarakat untuk melakukan pemesanan makam secara online, serta menyajikan informasi
                    TPU secara detail, update, dan kredibel dalam satu website.
                  </div>
                </div>
              </div>

              <!-- FAQ 2 -->
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Mengapa ada 3 Metode Pemakaman ?
                    </button>
                  </h2>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaq">
                  <div class="card-body">
                    Melihat keadaan saat ini dimana banyak korban jiwa karena covid, serta keterbatasan
                    lahan makam di DKI Jakarta. Maka dari itu kami, menyediakan 3 metode ini yang pertama makam covid
                    khusus jenazah covid, kedua tumpang tindih karena tidak ada lahan makam kosong di TPU, dan terakhir
                    makam
                    baru untuk TPU yang masih tersedia lahan makam kosong.
                  </div>
                </div>
              </div>

              <!-- FAQ 3 -->
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Kenapa hanya tersedia TPU di Kota Jakarta saja ?
                    </button>
                  </h2>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaq">
                  <div class="card-body">
                    Untuk Sementara hanya tersedia TPU di Jakarta karena banyak faktor, mungkin untuk kedepannya
                    kami perluas lagi tidak hanya di kota-kota besar saja tapi di kota-kota kecil maupun di desa-desa.
                  </div>
                </div>
              </div>

              <!-- FAQ 4 -->
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Bagaimana cara membuat akun di Kober ?
                    </button>
                  </h2>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaq">
                  <div class="card-body">
                    Masuk kedalam website kober, lalu pilih daftar dan masukkan data-data yang dibutuhkan untuk
                    membuat akun.
                  </div>
                </div>
              </div>

              <!-- FAQ 5 -->
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Bagaimana cara memesan Makam di Kober ?
                    </button>
                  </h2>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFaq">
                  <div class="card-body">
                    Untuk tutorial memesan makam lewat Kober dari awal sampai akhir sudah ada di beranda website,
                    di bagian <strong>Cara Pemesanan</strong> mohon di cek lagi yaa terimakasih :)
                  </div>
                </div>
              </div>

              <!-- FAQ 6 -->
              <div class="card">
                <div class="card-header" id="headingSix">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Metode Pembayaran Bisa Via Apa Saja Ya ?
                    </button>
                  </h2>
                </div>

                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFaq">
                  <div class="card-body">
                    Untuk saat ini hanya bisa via transfer rekening bank
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
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