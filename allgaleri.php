<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jabary - Website Budaya Jabar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>


    <!-- main  -->
    <div class="container kategorilist my-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center fw-bold judulkategori">Galeri</h1>
                <hr class="mx-auto" style="width:10%; background-color: #f49f16;">

            </div>
        </div>
        <div class="row categ-List">
            <div class="col-lg-4 col-md-4">
                <div class="hover hover-2 text-white rounded"><img src="img/Galeri/allgaleri1.jpg" alt="">
                    <a href="pakaian.php">
                        <div class="hover-overlay"></div>
                    </a>

                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title  mb-0">Pakaian</h3>
                        <p class="hover-2-description text-uppercase mb-0">Berisi tentang galeri foto pakaian adat<br>Jawa Barat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="hover hover-2 text-white rounded"><img src="img/Galeri/allgaleri2.jpg" alt="">
                    <a href="Tarian.php">
                        <div class="hover-overlay"></div>
                    </a>
                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title  mb-0">Tarian</h3>
                        <p class="hover-2-description text-uppercase mb-0">Berisi tentang galeri foto tarian adat<br>Jawa Barat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 ">
                <div class="hover hover-2 text-white rounded"><img src="img/Galeri/allgaleri3.jpg" alt="">
                    <a href="makanan.php">
                        <div class="hover-overlay"></div>
                    </a>
                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title  mb-0">Makanan Daerah</h3>
                        <p class="hover-2-description text-uppercase mb-0">Berisi tentang galeri foto makanan <br>daerah Jawa Barat</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row categ-List">
            <div class="col-lg-4 col-md-6 offset-lg-2">
                <div class="hover hover-2 text-white rounded"><img src="img/galeri/allgaleri4.jpg" alt="">
                    <a href="bangunan.php">
                        <div class="hover-overlay"></div>
                    </a>
                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title  mb-0">Rumah Adat</h3>
                        <p class="hover-2-description text-uppercase mb-0">Berisi tentang galeri foto rumah adat<br>Jawa Barat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6  ">
                <div class="hover hover-2 text-white rounded"><img src="img/Galeri/allgaleri5.jpg" alt="">
                    <a href="tradisi.php">
                        <div class="hover-overlay"></div>
                    </a>
                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title  mb-0"> Tradisi</h3>
                        <p class="hover-2-description text-uppercase mb-0">Berisi tentang galeri foto tradisi <br>daerah Jawa Barat</p>
                    </div>
                </div>
            </div>



        </div>
    </div>



    <!-- footer -->
    <?php include 'include/footer.php'; ?>





    <script src="js/bootstrap.bundle.min.js "></script>

</body>

</html>