<?php 
  include '../koneksi.php';

    $result = $conn->query("SELECT * from tbl_berita order by id desc");
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    echo json_encode($data);

?>