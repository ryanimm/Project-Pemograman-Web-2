<?php
 include '../koneksi.php';
 $req = $_REQUEST['req'];

 if($req == 'loadmorebangunan'){
 $no = $_POST['getresult'];
 $select = mysqli_query($conn,"SELECT * from tbl_bangunan limit $no,6");
 while($row = mysqli_fetch_array($select))
 {
  echo '<div class="col">
        <div class="card h-100">
            <div class="card-img-wrap ">
                <img src="img/Galeri/bangunan/'.$row['gambar_bangunan'].'" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">'.$row['nama_bangunan'].'</h5>
                <p class="card-text ">'.$row['keterangan_bangunan'].'</p>
            </div>
        </div>
    </div>';
 }
}

if($req == 'loadmorepakaian'){
    $no = $_POST['getresult'];
    $select = mysqli_query($conn,"SELECT * from tbl_pakaian limit $no,6");
    while($row = mysqli_fetch_array($select))
    {
     echo '<div class="col">
           <div class="card h-100">
               <div class="card-img-wrap ">
                   <img src="img/Galeri/pakaian/'.$row['gambar_pakaian'].'" class="card-img-top" alt="...">
               </div>
               <div class="card-body">
                   <h5 class="card-title">'.$row['nama_pakaian'].'</h5>
                   <p class="card-text ">'.$row['keterangan_pakaian'].'</p>
               </div>
           </div>
       </div>';
    }
}

if($req == 'loadmoretarian'){
    $no = $_POST['getresult'];
    $select = mysqli_query($conn,"SELECT * from tbl_tarian limit $no,6");
    while($row = mysqli_fetch_array($select))
    {
     echo '<div class="col">
           <div class="card h-100">
               <div class="card-img-wrap ">
                   <img src="img/Galeri/tarian/'.$row['gambar_tarian'].'" class="card-img-top" alt="...">
               </div>
               <div class="card-body">
                   <h5 class="card-title">'.$row['nama_tarian'].'</h5>
                   <p class="card-text ">'.$row['keterangan_tarian'].'</p>
               </div>
           </div>
       </div>';
    }
}

if($req == 'loadmoremakanan'){
    $no = $_POST['getresult'];
    $select = mysqli_query($conn,"SELECT * from tbl_makanan limit $no,6");
    while($row = mysqli_fetch_array($select))
    {
     echo '<div class="col">
           <div class="card h-100">
               <div class="card-img-wrap ">
                   <img src="img/Galeri/makanan/'.$row['gambar_makanan'].'" class="card-img-top" alt="...">
               </div>
               <div class="card-body">
                   <h5 class="card-title">'.$row['nama_makanan'].'</h5>
                   <p class="card-text ">'.$row['keterangan_makanan'].'</p>
               </div>
           </div>
       </div>';
    }
}

if($req == 'loadmoretradisi'){
    $no = $_POST['getresult'];
    $select = mysqli_query($conn,"SELECT * from tbl_tradisi limit $no,6");
    while($row = mysqli_fetch_array($select))
    {
     echo '<div class="col">
           <div class="card h-100">
               <div class="card-img-wrap ">
                   <img src="img/Galeri/tradisi/'.$row['gambar_tradisi'].'" class="card-img-top" alt="...">
               </div>
               <div class="card-body">
                   <h5 class="card-title">'.$row['nama_tradisi'].'</h5>
                   <p class="card-text ">'.$row['keterangan_tradisi'].'</p>
               </div>
           </div>
       </div>';
    }
}

?>