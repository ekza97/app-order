<?php
	 include ('admin/inc/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rumah Makan Sabar Menanti</title>
   <link rel="stylesheet" type="text/css" href="pelanggan/assets/css/bootstrap.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <a class="navbar-brand" href="#">Rumah Makan Sabar Menanti</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
   </nav>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card border-success  mb-4" style="max-width: 80rem;margin-top: 150px;">
					<div class="card-header bg-success" style="color: white;">Login Sebagai Admin</div>
					<div class="card-body">
						<form action="admin/proses/login.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control form-control-sm" placeholder="Username" name="username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-sm" placeholder="Password" name="password">
								<!-- <a href="" style="float: right;margin-bottom: 15px;">Lupa password ?</a> -->
							</div>
							<button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
							<p style="font-size:8pt;">Username : <b>admin</b> dan Password : <b>admin</b></p>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card border-success  mb-4" style="max-width: 80rem;margin-top: 150px;">
					<div class="card-header bg-success" style="color: white;">Silahkan Pilih Posisi Meja</div>
						<div class="card-body">
							<div class="row">
								<?php
									$query = mysqli_query($con, "SELECT * FROM meja ORDER BY idmeja")or die(mysqli_error($con));
									while ($meja=mysqli_fetch_array($query)) {
								?>
									<div class="col-md-3">
										<a href="pelanggan/proses/login.php?meja=<?php echo $meja['idmeja']; ?>" style="text-decoration: none;">
											<div class="card border-success mb-3" style="max-width: 8rem;">
												<div class="card-body">
													<h4 class="card-title"><?php echo $meja['namameja']; ?></h4>
												</div>
											</div>
										</a>
									</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
         
</body>
<script type="text/javascript" src="pelanggan/assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="pelanggan/assets/js/bootstrap.js"></script>
</html>