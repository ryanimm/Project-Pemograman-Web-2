<nav class="navbar  navbar-expand-lg navbar-dark p-md-3 shrink">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/index/Jabary.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Galeri
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="pakaian.php">Pakaian</a></li>
                            <li><a class="dropdown-item" href="tarian.php">Tarian</a></li>
                            <li><a class="dropdown-item" href="makanan.php">Makanan Daerah</a></li>
                            <li><a class="dropdown-item" href="bangunan.php">Bangunan</a></li>
                            <li><a class="dropdown-item" href="tradisi.php">Tradisi</a></li>

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="ensiklopedia.php">Ensiklopedia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="hubungikami.php">Hubungi kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Halo, <?php echo $_SESSION['username']?>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="administrator">Pergi Ke Dashboard</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>