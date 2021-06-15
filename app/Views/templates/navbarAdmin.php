<div class="container sticky-top">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="home" class="navbar-brand">
                <img src="/img/Logo Kober V1.png" alt="Logo KOBER">
            </a>

            <button 
                class="navbar-toggler navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                data-target="#navb"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Upload Berita</a>
                    </li>
                </ul>
                <span class="navbar-text-right">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" >
                        Admin <?= session()->get('fullname'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="updateprofile"><button class="dropdown-item" type="button">Edit Profil</button></a>
                        <a href="/auth/logout"><button class="dropdown-item" type="button">Keluar</button></a>
                    </div>
                </div>
        </nav>
    </div>

    