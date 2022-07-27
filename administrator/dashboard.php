<?php 
	$query 	  = mysqli_query($conn,"SELECT count(*) as bangunan from tbl_bangunan");
	$bangunan = mysqli_fetch_array($query);

	$b 	  	= mysqli_query($conn,"SELECT count(*) as berita from tbl_berita");
	$berita = mysqli_fetch_array($b);

	$e 	  		  = mysqli_query($conn,"SELECT count(*) as ensiklopedia from tbl_ensiklopedia");
	$ensiklopedia = mysqli_fetch_array($e);

	$k 	  	= mysqli_query($conn,"SELECT count(*) as kontak from tbl_kontak");
	$kontak = mysqli_fetch_array($k);

	$m 	  	 = mysqli_query($conn,"SELECT count(*) as makanan from tbl_makanan");
	$makanan = mysqli_fetch_array($m);

	$p 	  	 = mysqli_query($conn,"SELECT count(*) as pakaian from tbl_pakaian");
	$pakaian = mysqli_fetch_array($p);

	$t 	    = mysqli_query($conn,"SELECT count(*) as tarian from tbl_tarian");
	$tarian = mysqli_fetch_array($t);

	$tr 	  = mysqli_query($conn,"SELECT count(*) as tradisi from tbl_tradisi");
	$tradisi  = mysqli_fetch_array($tr);

?>		

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-home"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Bangunan</p>
												<h4 class="card-title"><?php echo $bangunan['bangunan'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-newspaper"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Berita</p>
												<h4 class="card-title"><?php echo $berita['berita'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-lightbulb"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Ensiklopedia</p>
												<h4 class="card-title"><?php echo $ensiklopedia['ensiklopedia'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-envelope"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Kontak</p>
												<h4 class="card-title"><?php echo $kontak['kontak'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-hamburger"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Makanan</p>
												<h4 class="card-title"><?php echo $makanan['makanan'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-tshirt"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Pakaian</p>
												<h4 class="card-title"><?php echo $pakaian['pakaian'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-female"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Tarian</p>
												<h4 class="card-title"><?php echo $tarian['tarian'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-person-booth"></i>
											</div>
										</div>
										<div class="col col-stats">
											<div class="numbers">
												<p class="card-category">Data Tradisi</p>
												<h4 class="card-title"><?php echo $tradisi['tradisi'] ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<center>
										<h3><b>SELAMAT DATANG DI DASHBOARD ADMINISTRATOR JABARY</b></h3>
					
									</center>
								</div>
							</div>
						</div>
					</div>
						
					</div>
				</div>
			</div>
			
		</div>