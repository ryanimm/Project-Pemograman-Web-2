<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Bangunan</h4>
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
								<a href="#">Bangunan</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Bangunan</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addBangunan">
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
													<th>Nama Bangunan</th>
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

<div class="modal fade" id="addBangunan" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Tambah Data</span> 
					<span class="fw-light">
						Bangunan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Bangunan</label>
					<input type="text" class="form-control" name="nama_bangunan" placeholder="Nama Bangunan ..." required>
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_bangunan" accept=".png, .jpg, .jpeg" required>
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" style="white-space: pre-line;" rows="5" name="keterangan_bangunan" placeholder="Keterangan ..." required></textarea>
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
	$g = mysqli_query($conn,"SELECT * FROM tbl_bangunan");
	while($d = mysqli_fetch_array($g)) {
?>

<div class="modal fade" id="editBangunan<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Edit Data</span> 
					<span class="fw-light">
						Bangunan
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
					<label>Nama Bangunan</label>
					<input type="text" class="form-control" value="<?php echo $d['nama_bangunan'] ?>" name="nama_bangunan" placeholder="Nama Bangunan ..." required>
				</div>	

				<div class="form-group">
					<img src="../img/Galeri/bangunan/<?php echo $d['gambar_bangunan'] ?>" width="70" height="70">
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_bangunan" accept=".png, .jpg, .jpeg">
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" rows="5" style="white-space: pre-line;" name="keterangan_bangunan" placeholder="Keterangan ..." required><?php echo $d['keterangan_bangunan'] ?></textarea>
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
	$h = mysqli_query($conn,"SELECT * FROM tbl_bangunan");
	while($c = mysqli_fetch_array($h)) {
?>

<div class="modal fade" id="hapusBangunan<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data</span> 
					<span class="fw-light">
						Bangunan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">

				<input type="hidden" value="<?php echo $c['id'] ?>" class="form-control" name="id">
				<input type="hidden" value="<?php echo $c['gambar_bangunan'] ?>" class="form-control" name="gambar_bangunan">

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
		$nama_bangunan 		 = $_POST['nama_bangunan'];
		$keterangan_bangunan = $_POST['keterangan_bangunan'];
  		$gambar_bangunan 	 = $_FILES['gambar_bangunan']['name'];

		if($gambar_bangunan != "") {
		   $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
		   $x 					   = explode('.', $gambar_bangunan); 
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_bangunan']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_bangunan;
		   
		   if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
		      move_uploaded_file($file_tmp, '../img/Galeri/bangunan/'.$nama_gambar_baru);
		      
		      $query  = "INSERT INTO tbl_bangunan (nama_bangunan, keterangan_bangunan, gambar_bangunan) 
		      			 VALUES ('$nama_bangunan', '$keterangan_bangunan', '$nama_gambar_baru')";
		      $result = mysqli_query($conn, $query);
		                  
		                if(!$result){
		                    die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		                } else {
		                    echo "<script>alert('Data berhasil ditambah.');window.location='?view=bangunan';</script>";
		                }

		   } else {     
		       echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=bangunan';</script>";
		   }

		} else {
		   
		   $query  = "INSERT INTO tbl_bangunan (nama_bangunan, keterangan_bangunan, gambar_bangunan)  VALUES ('$nama_bangunan', '$keterangan_bangunan', null)";
		   $result = mysqli_query($conn, $query);
		             
		             if(!$result){
		                 die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		             } else {
		                 echo "<script>alert('Data berhasil ditambah.');window.location='?view=bangunan';</script>";
		             }
		}
	}

	elseif(isset($_POST['ubah']))
	{
		$id 				 = $_POST['id'];
	    $nama_bangunan 		 = $_POST['nama_bangunan'];
		$keterangan_bangunan = $_POST['keterangan_bangunan'];
  		$gambar_bangunan 	 = $_FILES['gambar_bangunan']['name'];
	  	
	  	if($gambar_bangunan != "") {
	       $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
	       $x 					   = explode('.', $gambar_bangunan);
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_bangunan']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_bangunan;
	       
	       if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
	          
	       	  $get_foto  = "SELECT gambar_bangunan FROM tbl_bangunan WHERE id='$id'";
		      $data_foto = mysqli_query($conn, $get_foto); 
		      $foto_lama = mysqli_fetch_array($data_foto);

		      unlink("../img/Galeri/bangunan/".$foto_lama['gambar_bangunan']); 

	          move_uploaded_file($file_tmp, '../img/Galeri/bangunan/'.$nama_gambar_baru);
	                      
	          $query  = "UPDATE tbl_bangunan SET nama_bangunan = '$nama_bangunan', keterangan_bangunan = '$keterangan_bangunan', 
	          			 gambar_bangunan = '$nama_gambar_baru'";
	          $query .= "WHERE id = '$id'";
	          $result = mysqli_query($conn, $query);
	                    
	                    if(!$result){
	                        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	                    } else {
	                      echo "<script>alert('Data berhasil diubah.');window.location='?view=bangunan';</script>";
	                    }
	       } else {     
	          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=bangunan';</script>";
	       }
	    
	    } else {
	      
		      $query  = "UPDATE tbl_bangunan SET nama_bangunan = '$nama_bangunan', keterangan_bangunan = '$keterangan_bangunan'";
		      $query .= "WHERE id = '$id'";
		      $result = mysqli_query($conn, $query);
		      
		      if(!$result){
		            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		      } else {
		         	echo "<script>alert('Data berhasil diubah.');window.location='?view=bangunan';</script>";
		      }
	    }
	}

	elseif(isset($_POST['hapus']))
	{
		$id = $_POST["id"];
	    
	    $get_foto = "SELECT gambar_bangunan FROM tbl_bangunan WHERE id='$id'";
		$data_foto = mysqli_query($conn, $get_foto); 
        $foto_lama = mysqli_fetch_array($data_foto);

        unlink("../img/Galeri/bangunan/".$foto_lama['gambar_bangunan']); 

	    $query = "DELETE FROM tbl_bangunan WHERE id='$id' ";
	    $hasil_query = mysqli_query($conn, $query);

	    if(!$hasil_query) {
	      die ("Gagal menghapus data: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	    } else {
	      echo "<script>alert('Data berhasil dihapus.');window.location='?view=bangunan';</script>";
	    }
	}
?>