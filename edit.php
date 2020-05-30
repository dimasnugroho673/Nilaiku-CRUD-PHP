<!DOCTYPE html>
<html>
<head>
	<title>Nilaiku - Edit</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

	<style>
		* {
      font-family: 'Poppins';
    }

		.btn {
				box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.16);
		}

		footer {
			margin-top: 200px;
			min-height: 100px;
		}
		
		input {
			width: 100%;
		}
	</style>

</head>
<body>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="color: #FED136 !important;"><strong>Nilaiku</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php" style="color: #FED136 !important;">Daftar Nilai</a>
        </div>
      </div>
      </div>
		</nav>
		
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where nim='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group justify-content-center pt-4">			 
					<h3 style="color: #343A40 !important;"><strong>Edit Nilai</strong></h3>
					<div class="card mb-4">
						<div class="card-body">
						<form method="post" action="update.php">

							<label>Nim</label><br>
							<input name="nim" type="text" id="nim" value="<?php echo $d['nim']; ?>"><br><br>

							<label>Nama</label><br>
							<input name="nama" type="text" id="nama" value="<?php echo $d['nama']; ?>"><br><br>

							<label>Angkatan</label><br>
							<input name="angkatan" type="text" id="angkatan" value="<?php echo $d['angkatan']; ?>"><br><br>

							<label>Kalkulus</label><br>
							<input name="kalkulus" type="text" id="kalkulus" value="<?php echo $d['kalkulus']; ?>"><br><br>

							<label>Alpro</label><br>
							<input name="alpro" type="text" id="alpro" value="<?php echo $d['alpro']; ?>"><br><br>

							<label>PTI</label><br>
							<input name="pti" type="text" id="pti" value="<?php echo $d['pti']; ?>"><br><br>

							<button class="btn btn-success" type="submit" style="background-color: #FED136 !important; border: none; color: #343A40;">Update</button>

						</form>
						</div>
					</div>
			 		</div> 
				</div>
			</div>
    </div>
		<?php 
	}
	?>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>&copy; Copyright 2019 Nilaiku </p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>