<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Kontak</h4>
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
								<a href="#">Kontak</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Kontak</h4>
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Fullname</th>
													<th>Email</th>
													<th>Message</th>
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

<?php
$g = mysqli_query($conn,"SELECT * from tbl_kontak");
    while($c = mysqli_fetch_array($g)) {
?>

<div class="modal fade" id="hapusKontak<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data</span> 
					<span class="fw-light">
						Kontak
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
    
    if(isset($_POST['hapus']))
    {
        $id = $_POST["id"];

        $query = "DELETE FROM tbl_kontak WHERE id='$id' ";
        $hasil_query = mysqli_query($conn, $query);

        if(!$hasil_query) {
          echo "<script>alert('Data berhasil dihapus.');window.location='?view=kontak';</script>";
        } else {
          echo "<script>alert('Data berhasil dihapus.');window.location='?view=kontak';</script>";
        }
    }
?>