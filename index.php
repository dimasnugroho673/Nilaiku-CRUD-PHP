<!DOCTYPE html>
<html>
<head>
  <title>Nilaiku - Home</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/dataTables.jqueryui.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
  
  
	<style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
      }

      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

    * {
      font-family: 'Poppins';
    }

    .jumbotron::after {
      content: '';
      display: block;
      width: 100%;
      height: 400px;
      top: 10%;
      background-image: linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.3));
      position: absolute;
      bottom: 0;
    }

    .jumbotron .container {
        z-index: 1;
        position: relative;
    }

    .btn {
				box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.16);
		}

    .display-4 {
      margin-top: 70px;
    }

		footer {
			margin-top: 200px;
			min-height: 100px;
		}
	
	</style>

</head>
<body>
  
    
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="color: #FED136 !important;"><strong>Nilaiku</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="add.php"><button class="btn btn-primary" style="border-radius: 40px; background-color: #FED136 !important; border: none;color: #343A40 !important;">Tambah</button></a>
        </div>
      </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" style="height: 400px; background-image: url('assets/images/jumbotron.jpg'); background-size: cover;">
      <div class="container">
        <h2 class="display-4 text-white text-center animated fadeInUp" style="font-family: 'Raleway', sans-serif; text-shadow: 1px 1px 1px rgba(0, 0, 0, .7); z-index: 9999;"><strong>Lihat</strong> dan <strong>Pantau</strong> <br> Nilaimu Disini</h2>
      </div>
    </div>

  <div class="container pt-4">

    <div class="card mb-4">
      <div class="card-body">
      <table id="example" class="table table-bordered display" cellspacing="0" width="100%">
          <thead>
              <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Angkatan</th>
                <th>Kalkulus</th>
                <th>Alpro</th>
                <th>PTI</th>
                <th>Nilai</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Angkatan</th>
                <th>Kalkulus</th>
                <th>Alpro</th>
                <th>PTI</th>
                <th>Nilai</th>
                <th>Aksi</th>
              </tr>
          </tfoot>
          <tbody>
          <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM mahasiswa";
            $query = $koneksi->query($sql);
            $no = 1;

            while ($row = $query->fetch_assoc()) :?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row['nim'];?></td>
              <td><?php echo $row['nama'];?></td>
              <td><?php echo $row['angkatan'];?></td>
              <td><?php echo $row['kalkulus'];?></td>
              <td><?php echo $row['alpro'];?></td>
              <td><?php echo $row['pti'];?></td>
              <td><?php echo $row['nilai']; ?></td>
              <td>
                <a class="btn btn-success" href="edit.php?id=<?php echo $row['nim']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['nim']; ?>"onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
          </td>
          
        </tr>
          <?php endwhile;?>
          </tbody>
      </table>
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

  <script>
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  </script>

  <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="assets/js/dataTables.jqueryui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>