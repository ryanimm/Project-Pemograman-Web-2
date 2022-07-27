<?php
 include '../koneksi.php';
 $no = $_POST['getresult'];
 $select = mysqli_query($conn,"SELECT * from tbl_ensiklopedia limit $no,6");
 while($row = mysqli_fetch_array($select))
 {
  echo '<div class="col">
        <div class="card h-100 pb-3">
                    
        <div class="card-body">
            <h5 class="card-title">'.$row['nama_ensiklopedia'].'
            </h5>
            <p class="card-text mb-5">'.substr($row['keterangan_ensiklopedia'],0,100).'</p>
        </div>
        <div class="card-footer" style="border: none; background-color: transparent;">
            <a href="#readMore'.$row['id'].'" data-bs-toggle="modal" class="btn btn-success">Read More</a>
        </div>
    </div>

    </div>';
 }
?>

<?php 
    $g = mysqli_query($conn,"SELECT * from tbl_ensiklopedia");
    while($d = mysqli_fetch_array($g)) {
?>

<div class="modal fade" id="readMore<?php echo $d['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $d['nama_ensiklopedia'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div style="white-space: pre-line;">
                    <img src="img/Ensiklopedia/<?php echo $d['gambar_ensiklopedia'] ?>" class="pe-3" width="250" border="0" style="float:left"><?php echo $d['keterangan_ensiklopedia'] ?>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<?php } ?>