<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

     <script type="text/javascript"  href="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> -->
</head>
<body>
    
<nav class="navbar navbar-expand-lg nav-light bg-light fixed-top">
        <div class="container">
          <div class="gambar"><img src="foto/logo.png" alt=""></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav offset-lg-8 mb-2 mb-lg-1">
              <li class="nav-item">
                <section id="home">
                <a class="nav-link active" href="index.php"><b>Home</b></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="proses/list.php"><b>Data Siswa</b></a>
              </li>    
              <li class="nav-item">
                <a class="nav-link" href="Kontak.php"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php"><b>About</b></a>
              </li>

              <!-- <li class="navbar-brand">
                <a class="navbar-link" href="wa.php"><img src="whatsapp.svg" alt="" width="25px"></a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="ig.php"><img src="instagram.svg" alt="" width="25px"></a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="fb.php"><img src="facebook.svg" alt="" width="25px"></a>
              </li>
            </ul> -->
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <a href="add.php"class="btn btn-light text-info">Sign up</a> -->
          </div>
        </div>       
      </nav>
      <br><br>

<?php
include('../config/connection.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$keyword'");

$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<br>
            <?php foreach ($results as $result ) :?>

              <div class="container">
            <div class="card mb-3 " style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">  
              <?php echo "<img src='$result[file]' width='300' height='300'>"; ?>
              </div><br><br>
              <div class="col-md-8 ">
                <div class="card-body">
                  <h5 class="card-title ">Hasil Yang Dicari : </h5>
                  <p class="card-text ">
                  <p>Nama : <?php echo $result['nama']?></p>
                  <p>Alamat : <?php echo $result['alamat']?></p>
                  <p>Umur : <?php echo $result['umur']?></p>
                  <p>Jenis Kelamin : <?php echo $result['jenis_kelamin']?></p>
                  <p>Kelas : <?php echo $result['kelas']?></p></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          </div>
            
             
            <?php endforeach; ?>
    </body>
</html>
