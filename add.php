<!DOCTYPE html>
<html>
<head>
	<title>Nilaiku - Input</title>

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
		
		<div class="container mt-4">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group justify-content-center">
					<h3 style="color: #343A40 !important;"><strong>Input Nilai</strong></h3>
            <div class="card mb-4">
              <div class="card-body">
              <form method="post" action="mhs_aksi.php">

                <label>Nim</label><br>
                <input name="nim" type="text" id="nim"><br><br>

                <label>Nama</label><br>
                <input name="nama" type="text" id="nama"><br><br>

                <label>Angkatan</label><br>
                <input name="angkatan" type="text" id="angkatan"><br><br>

                <label>Kalkulus</label><br>
                <input name="kalkulus" type="text" id="kalkulus"><br><br>

                <label>Alpro</label><br>
                <input name="alpro" type="text" id="alpro" value=""><br><br>

                <label>PTI</label><br>
                <input name="pti" type="text" id="pti"><br><br>

                <button class="btn btn-success" type="submit" style="background-color: #FED136 !important; border: none; color: #343A40;">Simpan</button>

              </form>
              </div>
            </div>
      		</div> 
				</div>
			</div>
    </div>

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>&copy; Copyright 2019 Nilaiku </p>
        </div>
      </div>
    </div>
  </footer>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>