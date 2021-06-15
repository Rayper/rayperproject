<div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a href="home" class="navbar-brand">
                    <img src="/img/Logo Kober V1.png" alt="Logo KOBER">
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-lg-block">
                <li>
                    <span class="text">
                        | &nbsp; Pesan Makam Dengan Mudah, Hanya Sekali Klik
                    </span>
                </li>
            </ul>
            <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" >
                        <?= session()->get('fullname'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="updateprofile"><button class="dropdown-item" type="button">Edit Profil</button></a>
                        <a href="/auth/logout"><button class="dropdown-item" type="button">Keluar</button></a>
                    </div>
                </div>
        </nav>
</div>