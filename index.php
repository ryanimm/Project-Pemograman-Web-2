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


    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100  justify-content-center align-items-center">
        <div class="bannertext">
            <div class="banner-heading">
                JABARY
            </div>
            <div class="banner-sub-heading">
                Galeri Kesenian dan Budaya Jawa Barat
            </div>
        </div>

    </div>

    <!-- Main Content Area -->

    <div class="section ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-3">
                    <img src="img/index/koleksikesenianz.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-lg-4 mt-2">
                    <h2 class="mb-4 heading text-center title">Koleksi Kesenian dan Budaya Jawa Barat</h2>
                    <p class="text-center">Jabary menyediakan beragam gambar budaya dan kesenian Jawa Barat</p>
                    <p class="mt-5 text-center"><a href="allgaleri.php" class="btn btn-success">Jelajahi</a></p>
                </div>

            </div>
        </div>
    </div>



    <div class="renewsz container pb-5 mb-5">
        <div class="row mb-4 text-center ">
            <div class="col-lg-12">
                <h2 class="mb-4 pb-2 heading sectionberita">Berita Terkini</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <?php 
                include 'koneksi.php';
                $query = mysqli_query($conn,"SELECT * from tbl_berita order by id desc limit 3");
                while($row = mysqli_fetch_array($query)) {
            ?>

            <div class="col">
                <div class="card h-100 pb-3">
                    <img src="img/Berita/<?php echo $row['gambar_berita'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nama_berita'] ?>
                        </h5>
                        <p class="card-text"><?php echo substr($row['keterangan_berita'],0,250) ?> ...</p>
                    </div>
                    <div class="card-footer" style="border: none; background-color: transparent;">
                        <a href="isiBerita.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>
        </div>
    </div>



    <div class="container-fluid  bg-primary tentangkami">
        <div class="container pt-5 pb-5">

            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img text-center">
                        <img class="imgtentang" src="img/ryan.jpg" alt="" width="250" height="250">
                        <h4 class="pt-2 mb-5 namatentang">Ryan Immanuel<br>412020007</h4>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2 class="text-center sectiontentang">Tentang Developer
                        </h2>
                        <p class="text-center">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0 isitentang"><span style="font-weight: 700;">Saya</span> merupakan seseorang mahasiswa yang sedang berkuliah di Ukrida, dan alasan saya membuat website ini adalah karena saya tertarik dengan budaya Jawa Barat. </p>
                            </blockquote>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>
    





    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');
        nav.classList.add('fixed-top');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('shrink', 'shadow');
            } else  {
                nav.classList.remove('shrink', 'shadow');
            }
        });
    </script>
</body>

</html>