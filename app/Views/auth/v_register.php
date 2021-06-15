<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/Auth.css'); ?>">
</head>
<body>

    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="/img/bunga.png" alt="image" class="img-fluid">
                <!-- <img src="/img/logo.png" alt="image" class="img"> -->
            </div>
            <div class="col-md-6">
                <br>
                <h3 class="signin-text mb-3">Halaman Daftar Kober</h3>
                <br>
                    <form method="post" action="<?= site_url('Auth/save') ?>">
                    <?= csrf_field();?>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ; ?>" value="<?= old('email'); ?>">
                        </div>
                        <p>
                            <?= $validation->getError('email'); ?>
                        </p>
                            
                        
                        <div class="form-group">
                        <label for="password">Nama Lengkap</label>
                            <input type="text" name="fullname" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ; ?>" value="<?= old('fullname'); ?>" >
                        </div>
                        <p>
                            <?= $validation->getError('fullname'); ?>
                        </p>

                        <div class="form-group">
                        <label for="password">Nomor Handphone</label>
                            <input type="text" name="phonenumber" class="form-control <?= ($validation->hasError('phonenumber')) ? 'is-invalid' : '' ; ?> " value="<?= old('phonenumber'); ?>" >
                        </div>
                        <p>
                            <?= $validation->getError('phonenumber'); ?>
                        </p>

                        <div class="form-group">
                        <label for="password">Kata Sandi</label>
                            <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ; ?>">
                        </div>
                        <p>
                            <?= $validation->getError('password'); ?>
                        </p>

                        <div class="form-group">
                        <label for="password">Ulangi kata sandi</label>
                            <input type="password" name="confirmpw" class="form-control <?= ($validation->hasError('confirmpw')) ? 'is-invalid' : '' ; ?>">
                        </div>
                        <p>
                            <?= $validation->getError('confirmpw'); ?>
                        </p>
                            
                        <button type="submit" class="btn btn-class">Daftar</button>
                        <br>
                        <a href="login">Sudah mempunyai akun? Masuk disini !</a>
                    </form>
            </div>
        </div>
    </div>

   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
</body>
</html>

