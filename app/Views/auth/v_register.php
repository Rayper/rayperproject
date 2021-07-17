<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title; ?></title>
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
    <link rel="stylesheet" href="<?= base_url('/css/Auth.css'); ?>">
</head>

<body>

    <section class="form-login">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="/img/Login Image.jpg" alt="image" class="img-fluid">
                </div>
                <div class="col-lg-6 px-5 pt-5 justify-content-center">
                    <form method="post" action="<?= site_url('Auth/save') ?>" class="needs-validation" novalidate>
                        <?= csrf_field();?>
                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <a href="/Guest/Home">
                                    <img src="/img//Logo Kober V1.png" class="img-logo pl-4" alt="Logo KOBER">
                                </a>
                            </div>
                        </div>

                        <div class="form-row justify-content-center mx-2">
                            <div class="col-lg-10">
                                <h1>Daftar Untuk Membuat Akun!</h1>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <input type="text" name="fullname" placeholder="Nama Pengguna"
                                    class="form-control mx-3 mb-1<?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>"
                                    value="<?= old('fullname'); ?>" required>
                                <div class="invalid-feedback mx-3">
                                    Masukan Nama Pengguna
                                </div>
                            </div>
                        </div>

                        <div class="validasiregist">
                            <?= $validation->getError('fullname'); ?>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <input type="email" name="email" placeholder="Email" class="form-control mx-3 mb-1"
                                    <?= ($validation->hasError('email')) ? 'is-invalid' : '' ; ?>"
                                    value="<?= old('email'); ?>" required>
                                <div class="invalid-feedback mx-3">
                                    Masukan Email
                                </div>
                            </div>
                        </div>

                        <div class="validasiregist">
                            <?= $validation->getError('email'); ?>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <input type="text" name="phonenumber" placeholder="Nomor Handphone"
                                    class="form-control mx-3 mb-1<?= ($validation->hasError('phonenumber')) ? 'is-invalid' : '' ; ?> "
                                    value="<?= old('phonenumber'); ?>" required>
                                <div class="invalid-feedback mx-3">
                                    Masukan Nomor Handphone
                                </div>
                            </div>
                        </div>

                        <div class="validasiregist">
                            <?= $validation->getError('phonenumber'); ?>
                        </div>


                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <input type="password" name="password" placeholder="Kata Sandi"
                                    class="form-control mx-3 mb-1<?= ($validation->hasError('password')) ? 'is-invalid' : '' ; ?>"
                                    required>
                                <div class="invalid-feedback mx-3">
                                    Masukan Kata Sandi
                                </div>
                            </div>
                        </div>

                        <div class="validasiregist">
                            <?= $validation->getError('password'); ?>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <input type="password" name="confirmpw" placeholder="Konfirmasi Kata Sandi"
                                    class="form-control mx-3 mb-1<?= ($validation->hasError('confirmpw')) ? 'is-invalid' : '' ; ?>"
                                    required>
                                <div class="invalid-feedback mx-3">
                                    Masukan Konfirmasi Kata Sandi
                                </div>
                            </div>
                        </div>

                        <div class="validasiregist">
                            <?= $validation->getError('confirmpw'); ?>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-register mx-3 my-2">Daftar</button>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-lg-8">
                                <p class="mx-3">Sudah Mempunyai Akun? <a href="login">Masuk</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('/js/retina.min.js'); ?>"></script>
    <script src="<?= base_url('/js/register.js'); ?>"></script>

</body>

</html>