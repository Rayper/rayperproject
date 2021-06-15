<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/css/Auth.css'); ?>">
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
                <h3 class="signin-text mb-3">Halaman Masuk Kober</h3>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <?php if (session()->getFlashdata('pesan')):?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                    <br>
                <form method="post" action="<?= site_url('Auth/cekpassword') ?>" onSubmit ="return validasi()">
                    <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                                <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button class="btn btn-class" type="submit">Masuk</button>
                        <br>
                        <a href="register">Belum mempunyai akun? Daftar disini !</a>
                        <br>
                        <br>
                        <a href="#">Lupa kata sandi?</a>
                        <br>
                        <br>
                        <a href="/Home">Lihat Home Kami</a>
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
	function validasi() {
		var email    = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Email dan Password harus di isi !');
			return false;
		}
	}
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
</body>
</html>