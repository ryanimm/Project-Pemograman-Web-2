<?php 
session_start();
include '../koneksi.php';
if(($_SESSION['level'])!=='admin')
  { 
header('location:../login.php');
}
else{
?>	


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SISTEM ARTIKEL</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styleadmin.css">


</head>
<body>
	<div class="wrapper">
		
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="../index.php" class="logo">
					<img src="../img/Jabary.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav">
						<li class="nav-item">
							<a href="?view=dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Manajemen Data</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Data Galeri</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="?view=pakaian">
											<span class="sub-item">Data Pakaian</span>
										</a>
									</li>
									<li>
										<a href="?view=tarian">
											<span class="sub-item">Data Tarian</span>
										</a>
									</li>
									<li>
										<a href="?view=makanan">
											<span class="sub-item">Data Makanan</span>
										</a>
									</li>
									<li>
										<a href="?view=bangunan">
											<span class="sub-item">Data Bangunan</span>
										</a>
									</li>
									<li>
										<a href="?view=tradisi">
											<span class="sub-item">Data Tradisi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a href="?view=berita">
								<i class="fas fa-newspaper"></i>
								<p>Data Berita</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?view=ensiklopedia">
								<i class="fas fa-lightbulb"></i>
								<p>Data Ensiklopedia</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?view=kontak">
								<i class="fas fa-envelope"></i>
								<p>Data Kontak</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?view=useradmin">
								<i class="fas fa-user"></i>
								<p>Data Admin</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?view=keyadmin">
								<i class="fas fa-key"></i>
								<p>Data Admin Key</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="../logout.php">
								<i class="fas fa-lock"></i>
								<p>Logout</p>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
		
		<?php 
                // Dashboard
              	if(@$_GET['view']=='')
                   	include 'dashboard.php';
                elseif($_GET['view']=='dashboard')
                    include 'dashboard.php';

                // Data Galeri
                elseif($_GET['view']=='bangunan')
                   	include 'galeri/bangunan.php';

                elseif($_GET['view']=='makanan')
                   	include 'galeri/makanan.php';
                
                elseif($_GET['view']=='pakaian')
                   	include 'galeri/pakaian.php';
                
                elseif($_GET['view']=='tarian')
                   	include 'galeri/tarian.php';

                elseif($_GET['view']=='tradisi')
                   	include 'galeri/tradisi.php';

                // Data Berita
                elseif($_GET['view']=='berita')
                   	include 'berita/berita.php';

                // Data Ensiklopedia
                elseif($_GET['view']=='ensiklopedia')
                   	include 'ensiklopedia/ensiklopedia.php';

                // Data Kontak
                elseif($_GET['view']=='kontak')
                   	include 'kontak/kontak.php';
				// Data User Admin
				elseif($_GET['view']=='useradmin')
                   	include 'useradmin/admin.php';
				// Data Admin Key
				elseif($_GET['view']=='keyadmin')
					include 'keyadmin/keyadmin.php';
    	?>
	
	</div>
	<script src="assets/js/jquery.3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script src="assets/js/getTableData.js"></script>
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="assets/js/ready.min.js"></script>
	<script >
		$(document).ajaxComplete(function() {
			$('#add-row').DataTable({
			});
		});
	</script>
</body>
</html>
<?php } ?>