<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Tradisi</h4>
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
								<a href="#">Tradisi</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Tradisi</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addTradisi">
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
													<th>Nama Tradisi</th>
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

<div class="modal fade" id="addTradisi" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Tambah Data</span> 
					<span class="fw-light">
						Tradisi
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="" enctype="multipart/form-data">
			
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Tradisi</label>
					<input type="text" class="form-control" name="nama_tradisi" placeholder="Nama Tradisi ..." required>
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_tradisi" accept=".png, .jpg, .jpeg" required>
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" style="white-space: pre-line;" rows="5" name="keterangan_tradisi" placeholder="Keterangan ..." required></textarea>
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
	$g = mysqli_query($conn,"SELECT * FROM tbl_tradisi");
	while($d = mysqli_fetch_array($g)) {
?>

<div class="modal fade" id="editTradisi<?php echo $d['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Edit Data</span> 
					<span class="fw-light">
						Tradisi
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
					<label>Nama Tradisi</label>
					<input type="text" class="form-control" value="<?php echo $d['nama_tradisi'] ?>" name="nama_tradisi" placeholder="Nama Tradisi ..." required>
				</div>	

				<div class="form-group">
					<img src="../img/Galeri/tradisi/<?php echo $d['gambar_tradisi'] ?>" width="70" height="70">
				</div>	

				<div class="form-group">
					<label>Upload Gambar</label>
					<input type="file" class="form-control" name="gambar_tradisi" accept=".png, .jpg, .jpeg">
					<small>Format Gambar Harus JPG / PNG / JPEG</small>
				</div>	

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control"  style="white-space: pre-line;" rows="5" name="keterangan_tradisi" placeholder="Keterangan ..." required><?php echo $d['keterangan_tradisi'] ?></textarea>
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
	$h = mysqli_query($conn,"SELECT * FROM tbl_tradisi");
	while($c = mysqli_fetch_array($h)) {
?>

<div class="modal fade" id="hapusTradisi<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data</span> 
					<span class="fw-light">
						Tradisi
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
		$nama_tradisi 		 = $_POST['nama_tradisi'];
		$keterangan_tradisi  = $_POST['keterangan_tradisi'];
  		$gambar_tradisi 	 = $_FILES['gambar_tradisi']['name'];

		if($gambar_tradisi != "") {
		   $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
		   $x 					   = explode('.', $gambar_tradisi); 
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_tradisi']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_tradisi;
		   
		   if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
		      move_uploaded_file($file_tmp, '../img/Galeri/tradisi/'.$nama_gambar_baru);
		      
		      $query  = "INSERT INTO tbl_tradisi (nama_tradisi, keterangan_tradisi, gambar_tradisi) 
		      			 VALUES ('$nama_tradisi', '$keterangan_tradisi', '$nama_gambar_baru')";
		      $result = mysqli_query($conn, $query);
		                  
		                if(!$result){
		                    die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		                } else {
		                    echo "<script>alert('Data berhasil ditambah.');window.location='?view=tradisi';</script>";
		                }

		   } else {     
		       echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=tradisi';</script>";
		   }

		} else {
		   
		   $query  = "INSERT INTO tbl_tradisi (nama_tradisi, keterangan_tradisi, gambar_tradisi)  VALUES ('$nama_Tradisi', '$keterangan_tradisi', null)";
		   $result = mysqli_query($conn, $query);
		             
		             if(!$result){
		                 die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		             } else {
		                 echo "<script>alert('Data berhasil ditambah.');window.location='?view=tradisi';</script>";
		             }
		}
	}

	elseif(isset($_POST['ubah']))
	{
		$id 				 = $_POST['id'];
	    $nama_tradisi 		 = $_POST['nama_tradisi'];
		$keterangan_tradisi  = $_POST['keterangan_tradisi'];
  		$gambar_tradisi 	 = $_FILES['gambar_tradisi']['name'];
	  	
	  	if($gambar_tradisi != "") {
	       $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
	       $x 					   = explode('.', $gambar_tradisi);
		   $ekstensi 			   = strtolower(end($x));
		   $file_tmp 			   = $_FILES['gambar_tradisi']['tmp_name'];   
		   $angka_acak     		   = rand(1,999);
		   $nama_gambar_baru 	   = $angka_acak.'-'.$gambar_tradisi;
	       
	       if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
	          
	       	  $get_foto  = "SELECT gambar_tradisi FROM tbl_tradisi WHERE id='$id'";
		      $data_foto = mysqli_query($conn, $get_foto); 
		      $foto_lama = mysqli_fetch_array($data_foto);

		      unlink("../img/Galeri/tradisi/".$foto_lama['gambar_tradisi']); 

	          move_uploaded_file($file_tmp, '../img/Galeri/tradisi/'.$nama_gambar_baru);
	                      
	          $query  = "UPDATE tbl_tradisi SET nama_tradisi = '$nama_tradisi', keterangan_tradisi = '$keterangan_tradisi', 
	          			 gambar_tradisi = '$nama_gambar_baru'";
	          $query .= "WHERE id = '$id'";
	          $result = mysqli_query($conn, $query);
	                    
	                    if(!$result){
	                        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	                    } else {
	                      echo "<script>alert('Data berhasil diubah.');window.location='?view=tradisi';</script>";
	                    }
	       } else {     
	          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png atau jpeg.');window.location='?view=tradisi';</script>";
	       }
	    
	    } else {
	      
		      $query  = "UPDATE tbl_tradisi SET nama_tradisi = '$nama_tradisi', keterangan_tradisi = '$keterangan_tradisi'";
		      $query .= "WHERE id = '$id'";
		      $result = mysqli_query($conn, $query);
		      
		      if(!$result){
		            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
		      } else {
		         	echo "<script>alert('Data berhasil diubah.');window.location='?view=tradisi';</script>";
		      }
	    }
	}

	elseif(isset($_POST['hapus']))
	{
		$id = $_POST["id"];
	    
	    $get_foto = "SELECT gambar_tradisi FROM tbl_tradisi WHERE id='$id'";
		$data_foto = mysqli_query($conn, $get_foto); 
        $foto_lama = mysqli_fetch_array($data_foto);

        unlink("../img/Galeri/tradisi/".$foto_lama['gambar_tradisi']); 

	    $query = "DELETE FROM tbl_tradisi WHERE id='$id' ";
	    $hasil_query = mysqli_query($conn, $query);

	    if(!$hasil_query) {
	      die ("Gagal menghapus data: ".mysqli_errno($conn)." - ".mysqli_error($conn));
	    } else {
	      echo "<script>alert('Data berhasil dihapus.');window.location='?view=tradisi';</script>";
	    }
	}
?>