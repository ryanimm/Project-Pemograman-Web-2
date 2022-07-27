<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Pakaian</h4>
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
								<a href="#">Pakaian</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Pakaian</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addPakaian">
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
													<th>Nama Pakaian</th>
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

<div class="modal fade" id="addPakaian" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Tambah Data</span> 
					<span class="fw-light">
						Pakaian
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Pakaian</label>
					<input type="text" class="form-control" name="nama_pakaian" placeholder="Nama Pakaian ..." required>
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_pakaian" accept=".png, .jpg, .jpeg" required>
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" style="white-space: pre-line;" rows="5" name="keterangan_pakaian" placeholder="Keterangan ..." required></textarea>
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
	$g = mysqli_query($conn,"SELECT * FROM tbl_pakaian");
	while($d = mysqli_fetch_array($g)) {
?>

<div class="modal fade" id="editPakaian<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Edit Data</span> 
					<span class="fw-light">
						Pakaian
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
					<label>Nama Pakaian</label>
					<input type="text" class="form-control" value="<?php echo $d['nama_pakaian'] ?>" name="nama_pakaian" placeholder="Nama Pakaian ..." required>
				</div>	

				<div class="form-group">
					<img src="../img/Galeri/pakaian/<?php echo $d['gambar_pakaian'] ?>" width="70" height="70">
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_pakaian" accept=".png, .jpg, .jpeg">
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" style="white-space: pre-line;" rows="5" name="keterangan_pakaian" placeholder="Keterangan ..." required><?php echo $d['keterangan_pakaian'] ?></textarea>
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
	$h = mysqli_query($conn,"SELECT * FROM tbl_pakaian");
	while($c = mysqli_fetch_array($h)) {
?>

<div class="modal fade" id="hapusPakaian<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data</span> 
					<span class="fw-light">
						Pakaian
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
		$nama_pakaian 		 = $_POST['nama_pakaian'];
		$keterangan_pakaian  = $_POST['keterangan_pakaian'];
  		$gambar_pakaian 	 = $_FILES['gambar_pakaian']['name'];

		if($gambar_pakaian != "") {
		   $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
		   $x 					   = explode('.', $gambar_pakaian); 
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_pakaian']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_pakaian;
		   
		   if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
		      move_uploaded_file($file_tmp, '../img/Galeri/pakaian/'.$nama_gambar_baru);
		      
		      $query  = "INSERT INTO tbl_pakaian (nama_pakaian, keterangan_pakaian, gambar_pakaian) 
		      			 VALUES ('$nama_pakaian', '$keterangan_pakaian', '$nama_gambar_baru')";
		      $result = mysqli_query($conn, $query);
		                  
		                if(!$result){
		                    die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		                } else {
		                    echo "<script>alert('Data berhasil ditambah.');window.location='?view=pakaian';</script>";
		                }

		   } else {     
		       echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=pakaian';</script>";
		   }

		} else {
		   
		   $query  = "INSERT INTO tbl_makanan (nama_pakaian, keterangan_pakaian, gambar_makanan)  VALUES ('$nama_pakaian', '$keterangan_pakaian', null)";
		   $result = mysqli_query($conn, $query);
		             
		             if(!$result){
		                 die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		             } else {
		                 echo "<script>alert('Data berhasil ditambah.');window.location='?view=pakaian';</script>";
		             }
		}
	}

	elseif(isset($_POST['ubah']))
	{
		$id 				 = $_POST['id'];
	    $nama_pakaian 		 = $_POST['nama_pakaian'];
		$keterangan_pakaian  = $_POST['keterangan_pakaian'];
  		$gambar_pakaian 	 = $_FILES['gambar_pakaian']['name'];
	  	
	  	if($gambar_pakaian != "") {
	       $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
	       $x 					   = explode('.', $gambar_pakaian);
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_pakaian']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_pakaian;
	       
	       if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
	          
	       	  $get_foto  = "SELECT gambar_pakaian FROM tbl_pakaian WHERE id='$id'";
		      $data_foto = mysqli_query($conn, $get_foto); 
		      $foto_lama = mysqli_fetch_array($data_foto);

		      unlink("../img/Galeri/pakaian/".$foto_lama['gambar_pakaian']); 

	          move_uploaded_file($file_tmp, '../img/Galeri/pakaian/'.$nama_gambar_baru);
	                      
	          $query  = "UPDATE tbl_pakaian SET nama_pakaian = '$nama_pakaian', keterangan_pakaian = '$keterangan_pakaian', 
	          			 gambar_pakaian = '$nama_gambar_baru'";
	          $query .= "WHERE id = '$id'";
	          $result = mysqli_query($conn, $query);
	                    
	                    if(!$result){
	                        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	                    } else {
	                      echo "<script>alert('Data berhasil diubah.');window.location='?view=pakaian';</script>";
	                    }
	       } else {     
	          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=pakaian';</script>";
	       }
	    
	    } else {
	      
		      $query  = "UPDATE tbl_pakaian SET nama_pakaian = '$nama_pakaian', keterangan_pakaian = '$keterangan_pakaian'";
		      $query .= "WHERE id = '$id'";
		      $result = mysqli_query($conn, $query);
		      
		      if(!$result){
		            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		      } else {
		         	echo "<script>alert('Data berhasil diubah.');window.location='?view=pakaian';</script>";
		      }
	    }
	}

	elseif(isset($_POST['hapus']))
	{
		$id = $_POST["id"];
	    
	    $get_foto = "SELECT gambar_pakaian FROM tbl_pakaian WHERE id='$id'";
		$data_foto = mysqli_query($conn, $get_foto); 
        $foto_lama = mysqli_fetch_array($data_foto);

        unlink("../img/Galeri/pakaian/".$foto_lama['gambar_pakaian']); 

	    $query = "DELETE FROM tbl_pakaian WHERE id='$id' ";
	    $hasil_query = mysqli_query($conn, $query);

	    if(!$hasil_query) {
	      die ("Gagal menghapus data: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	    } else {
	      echo "<script>alert('Data berhasil dihapus.');window.location='?view=pakaian';</script>";
	    }
	}
?>