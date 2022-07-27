<?php
    include '../koneksi.php';
    $reqz = $_REQUEST['reqz'];
    if($reqz == 'searchpkn'){
    $keyword="";
    if (isset($_POST['searchpakaian'])) {
        $keyword = $_POST['searchpakaian'];
    }

    $query = mysqli_query($conn,"SELECT * FROM tbl_pakaian WHERE nama_pakaian LIKE '%".$keyword."%' ORDER BY id ASC limit 0,6");
    $hitung_data = mysqli_num_rows($query);
    if ($hitung_data > 0) {
    while ($row = mysqli_fetch_array($query)) { 
    ?>
    
    <div class="col">
        <div class="card h-100">
            <div class="card-img-wrap ">
                <img src="img/Galeri/pakaian/<?php echo $row['gambar_pakaian'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_pakaian'] ?></h5>
                <p class="card-text "><?php echo $row['keterangan_pakaian'] ?></p>
            </div>
        </div>
    </div>

<?php } } else { ?> 
    <center><h4>Tidak Ada Data</h4></center>
<?php } } ?>

<?php
    if($reqz == 'searchmkn'){
    $keyword="";
    if (isset($_POST['search'])) {
        $keyword = $_POST['search'];
    }

    $query = mysqli_query($conn,"SELECT * FROM tbl_makanan WHERE nama_makanan LIKE '%".$keyword."%' ORDER BY id ASC limit 0,6");
    $hitung_data = mysqli_num_rows($query);
    if ($hitung_data > 0) {
    while ($row = mysqli_fetch_array($query)) { 
    ?>
    
    <div class="col">
        <div class="card h-100">
            <div class="card-img-wrap ">
                <img src="img/Galeri/makanan/<?php echo $row['gambar_makanan'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_makanan'] ?></h5>
                <p class="card-text "><?php echo $row['keterangan_makanan'] ?></p>
            </div>
        </div>
    </div>

<?php } } else { ?> 
    <center><h4>Tidak Ada Data</h4></center>
<?php } } ?>

<?php
    if($reqz == 'searchtrn'){
    $keyword="";
    if (isset($_POST['search'])) {
        $keyword = $_POST['search'];
    }

    $query = mysqli_query($conn,"SELECT * FROM tbl_tarian WHERE nama_tarian LIKE '%".$keyword."%' ORDER BY id ASC limit 0,6");
    $hitung_data = mysqli_num_rows($query);
    if ($hitung_data > 0) {
    while ($row = mysqli_fetch_array($query)) { 
    ?>
    
    <div class="col">
        <div class="card h-100">
            <div class="card-img-wrap ">
                <img src="img/Galeri/tarian/<?php echo $row['gambar_tarian'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_tarian'] ?></h5>
                <p class="card-text "><?php echo $row['keterangan_tarian'] ?></p>
            </div>
        </div>
    </div>

<?php } } else { ?> 
    <center><h4>Tidak Ada Data</h4></center>
<?php } } ?>

<?php
    if($reqz == 'searchbgn'){
    $keyword="";
    if (isset($_POST['search'])) {
        $keyword = $_POST['search'];
    }

    $query = mysqli_query($conn,"SELECT * FROM tbl_bangunan WHERE nama_bangunan LIKE '%".$keyword."%' ORDER BY id ASC limit 0,6");
    $hitung_data = mysqli_num_rows($query);
    if ($hitung_data > 0) {
    while ($row = mysqli_fetch_array($query)) { 
    ?>
    
    <div class="col">
        <div class="card h-100">
            <div class="card-img-wrap ">
                <img src="img/Galeri/bangunan/<?php echo $row['gambar_bangunan'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_bangunan'] ?></h5>
                <p class="card-text "><?php echo $row['keterangan_bangunan'] ?></p>
            </div>
        </div>
    </div>


<?php } } else { ?> 
    <center><h4>Tidak Ada Data</h4></center>
<?php } } ?>

<?php
    if($reqz == 'searchtrds'){
    $keyword="";
    if (isset($_POST['search'])) {
        $keyword = $_POST['search'];
    }

    $query = mysqli_query($conn,"SELECT * FROM tbl_tradisi WHERE nama_tradisi LIKE '%".$keyword."%' ORDER BY id ASC limit 0,6");
    $hitung_data = mysqli_num_rows($query);
    if ($hitung_data > 0) {
    while ($row = mysqli_fetch_array($query)) { 
    ?>
    
    <div class="col">
        <div class="card h-100">
            <div class="card-img-wrap ">
                <img src="img/Galeri/tradisi/<?php echo $row['gambar_tradisi'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama_tradisi'] ?></h5>
                <p class="card-text "><?php echo $row['keterangan_tradisi'] ?></p>
            </div>
        </div>
    </div>
<?php } } else { ?> 
    <center><h4>Tidak Ada Data</h4></center>
<?php } } ?>




