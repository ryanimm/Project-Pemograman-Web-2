<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Makanan</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Data</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Makanan</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Makanan</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addMakanan">
											<i class="fa fa-plus"></i>
											Tambah Data
										</button>
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Gambar</th>
													<th>Nama Makanan</th>
													<th>Action</th>
												</tr>
											</thead>
											
											<tbody>
										
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

<div class="modal fade" id="addMakanan" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Tambah Data</span> 
					<span class="fw-light">
						Makanan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Makanan</label>
					<input type="text" class="form-control" name="nama_makanan" placeholder="Nama Makanan ..." required>
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_makanan" accept=".png, .jpg, .jpeg" required>
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" style="white-space: pre-line;" rows="5" name="keterangan_makanan" placeholder="Keterangan ..." required></textarea>
				</div>										
			</div>

			<div class="modal-footer no-bd">
				<button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
			</div>

			</form>
		</div>
	</div>
</div>

<?php 
	$g = mysqli_query($conn,"SELECT * FROM tbl_makanan");
	while($d = mysqli_fetch_array($g)) {
?>

<div class="modal fade" id="editMakanan<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Edit Data</span> 
					<span class="fw-light">
						Makanan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">

				<input type="hidden" value="<?php echo $d['id'] ?>" class="form-control" name="id">

				<div class="form-group">
					<label>Nama Makanan</label>
					<input type="text" class="form-control" value="<?php echo $d['nama_makanan'] ?>" name="nama_makanan" placeholder="Nama Makanan ..." required>
				</div>	

				<div class="form-group">
					<img src="../img/Galeri/makanan/<?php echo $d['gambar_makanan'] ?>" width="70" height="70">
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_makanan" accept=".png, .jpg, .jpeg">
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" style="white-space: pre-line;" rows="5" name="keterangan_makanan" placeholder="Keterangan ..." required><?php echo $d['keterangan_makanan'] ?></textarea>
				</div>										
			</div>

			<div class="modal-footer no-bd">
				<button type="submit" name="ubah" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
			</div>

			</form>
		</div>
	</div>
</div>

<?php } ?>

<?php 
	$h = mysqli_query($conn,"SELECT * FROM tbl_makanan");
	while($c = mysqli_fetch_array($h)) {
?>

<div class="modal fade" id="hapusMakanan<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data</span> 
					<span class="fw-light">
						Makanan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">

				<input type="hidden" value="<?php echo $c['id'] ?>" class="form-control" name="id">

				<div class="form-group">
					<h4>Apakah Anda ingin Menghapus Data ini ?</h4>
				</div>					
			</div>

			<div class="modal-footer no-bd">
				<button type="submit" name="hapus" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
			</div>

			</form>
		</div>
	</div>
</div>

<?php } ?>

<?php 
	
	if(isset($_POST['simpan']))
	{
		$nama_makanan 		 = $_POST['nama_makanan'];
		$keterangan_makanan  = $_POST['keterangan_makanan'];
  		$gambar_makanan 	 = $_FILES['gambar_makanan']['name'];

		if($gambar_makanan != "") {
		   $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
		   $x 					   = explode('.', $gambar_makanan); 
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_makanan']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_makanan;
		   
		   if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
		      move_uploaded_file($file_tmp, '../img/Galeri/makanan/'.$nama_gambar_baru);
		      
		      $query  = "INSERT INTO tbl_makanan (nama_makanan, keterangan_makanan, gambar_makanan) 
		      			 VALUES ('$nama_makanan', '$keterangan_makanan', '$nama_gambar_baru')";
		      $result = mysqli_query($conn, $query);
		                  
		                if(!$result){
		                    die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		                } else {
		                    echo "<script>alert('Data berhasil ditambah.');window.location='?view=makanan';</script>";
		                }

		   } else {     
		       echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=makanan';</script>";
		   }

		} else {
		   
		   $query  = "INSERT INTO tbl_makanan (nama_makanan, keterangan_makanan, gambar_makanan)  VALUES ('$nama_makanan', '$keterangan_makanan', null)";
		   $result = mysqli_query($conn, $query);
		             
		             if(!$result){
		                 die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		             } else {
		                 echo "<script>alert('Data berhasil ditambah.');window.location='?view=makanan';</script>";
		             }
		}
	}

	elseif(isset($_POST['ubah']))
	{
		$id 				 = $_POST['id'];
	    $nama_makanan 		 = $_POST['nama_makanan'];
		$keterangan_makanan  = $_POST['keterangan_makanan'];
  		$gambar_makanan 	 = $_FILES['gambar_makanan']['name'];
	  	
	  	if($gambar_makanan != "") {
	       $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
	       $x 					   = explode('.', $gambar_makanan);
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_makanan']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_makanan;
	       
	       if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
	          
	       	  $get_foto  = "SELECT gambar_makanan FROM tbl_makanan WHERE id='$id'";
		      $data_foto = mysqli_query($conn, $get_foto); 
		      $foto_lama = mysqli_fetch_array($data_foto);

		      unlink("../img/Galeri/makanan/".$foto_lama['gambar_makanan']); 

	          move_uploaded_file($file_tmp, '../img/Galeri/makanan/'.$nama_gambar_baru);
	                      
	          $query  = "UPDATE tbl_makanan SET nama_makanan = '$nama_makanan', keterangan_makanan = '$keterangan_makanan', 
	          			 gambar_makanan = '$nama_gambar_baru'";
	          $query .= "WHERE id = '$id'";
	          $result = mysqli_query($conn, $query);
	                    
	                    if(!$result){
	                        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	                    } else {
	                      echo "<script>alert('Data berhasil diubah.');window.location='?view=makanan';</script>";
	                    }
	       } else {     
	          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=makanan';</script>";
	       }
	    
	    } else {
	      
		      $query  = "UPDATE tbl_makanan SET nama_makanan = '$nama_makanan', keterangan_makanan = '$keterangan_makanan'";
		      $query .= "WHERE id = '$id'";
		      $result = mysqli_query($conn, $query);
		      
		      if(!$result){
		            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		      } else {
		         	echo "<script>alert('Data berhasil diubah.');window.location='?view=makanan';</script>";
		      }
	    }
	}

	elseif(isset($_POST['hapus']))
	{
		$id = $_POST["id"];
	    
	    $get_foto = "SELECT gambar_makanan FROM tbl_makanan WHERE id='$id'";
		$data_foto = mysqli_query($conn, $get_foto); 
        $foto_lama = mysqli_fetch_array($data_foto);

        unlink("../img/Galeri/makanan/".$foto_lama['gambar_makanan']); 

	    $query = "DELETE FROM tbl_makanan WHERE id='$id' ";
	    $hasil_query = mysqli_query($conn, $query);

	    if(!$hasil_query) {
	      die ("Gagal menghapus data: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	    } else {
	      echo "<script>alert('Data berhasil dihapus.');window.location='?view=makanan';</script>";
	    }
	}
?>