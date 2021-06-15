<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari TPU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/css/Findtpu.css'); ?>">
</head>
<body>
    <!-- navbar -->
    <?= $this->include('templates/navbarUser'); ?>
    
    <!-- Header -->
    <header class="text-left">
            <h1>CARI TPU</h1>
    </header>
    <br>

    <!-- Main -->
    <main>

    <section class="section-header-tpu" id="headerTPU">
            <form action="" method = "get">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-sm-2">
                            <input class="form-control mr-5" type="search" placeholder="Cari TPU" name="keyword">
                        </div>
                        <div class="col-lg-sm-2">
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
                                <img src="<?= base_url('img/'.$dt['Thumbnail']) ?>" alt="Image Card TPU" class="card-img-top">
                                    <div class="card-body-exist">
                                        <br>
                                        <h4 class="card-title"><?= $dt['NamaTPU'] ?></h4>
                                        <p class="text-center"><?= $dt['AlamatTPU'] ?></p>
                                        <p class="text-center">Unit <?= $dt['Unit'] ?></p>
                                        <p class="text-center">Kategori : <?= $dt['nama'] ?></p>
                                        <p class="text-center">Hubungi   : <?= $dt['Contact'] ?></p>
                                        <a href="<?= $dt['Link'] ?>" class="text-center">Link Lokasi</a><br>
                                        <a href="/member/pemesananmakam/<?= $dt['tpu_id'] ?>" class="btn btn-full px-3 py-1 mt-3">Pesan</a>
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

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>