<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript"  href="https://code.jquery.com/jquery-3.5.1.js"> </script> -->
    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
</head>
<body>
<?php

include('connection.php');

$query = mysqli_query($connect, 'SELECT * FROM karyawan');
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
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
                <a class="nav-link" href="index.php"><b>Home</b></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" href="list.php"><b>Data Siswa</b></a>
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

    <br><br><br>
    &nbsp;<a href="add.php" class="btn btn-dark bg-success"><b>TAMBAH DATA</b></a>
    
<br>
        <!--<form action="search.php" method="get">
            <input type="text" name="keyword" placeholder="keyword..">
            <button type="submit">Search</button>
        </form>-->
<br>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
                <th>Nama Depan</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>File</th>
                <th>Aksi</th>
               
            </tr>
        </thead>
            <body>
            <?php foreach ($results as $result ) :?>
                <tr>
                    <td><?php echo $result['nama']?></td>
                    <td><?php echo $result['alamat']?></td>
                    <td><?php echo $result['umur']?></td>
                    <td><?php echo $result['jenis_kelamin']?></td>
                    <td><?php echo $result['kelas']?></td>
                    <td>
                      <center>
                        <?php echo "<img src='$result[file]' width='35' height='40'>"; ?> 
                      </center>              
                    </td>
                    <td>
                    <a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-warning col-md-3">Edit</a>
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger col-md-3  " data-bs-toggle="modal" data-bs-target="#delete<?php echo $result['id']?>">
                          Hapus
                        </button> 
                        <button type="button" class="btn btn-info col-md-3  " data-bs-toggle="modal" data-bs-target="#detail<?php echo $result['id']?>">
                          Detail
                        </button> 
                        <div class="modal fade" id="detail<?php echo $result['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                         
                              <p><i>Note: Dibawah ini adalah detail informasi siswa berdasarkan id siswa</i></p>
                              <table border="0" cellpadding="4">
                                  
                                      <td>Nama</td>
                                      <td>: <?php echo $result['nama']?></td>
                                  </tr>
                                  <tr>
                                      <td>Alamat</td>
                                      <td>: <?php echo $result['alamat']?></td>
                                  </tr>
                                  <tr>
                                      <td>Umur</td>
                                      <td>: <?php echo $result['umur']?></td>
                                  </tr>
                                  <tr>
                                      <td>Jenis Kelamin</td>
                                      <td>: <?php echo $result['jenis_kelamin']?></td>
                                  </tr>
                                  <tr>
                                      <td>Kelas</td>
                                      <td>: <?php echo $result['kelas']?></td>
                                  </tr>
                                  
                              </table><br>
                              <a href="untuk gambar.php">Lihat Gambar</a>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                      </div>
                        
                        <!-- Modal -->
        <div class="modal fade" id="delete<?php echo $result['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                              </svg></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah Anda Yakin Akan Menghapus Data : <b> <?php echo $result['nama']?></b>?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="delete.php?id=<?php echo $result['id'] ?> ?>" class="btn btn-danger"> Delete</a>
                              </div>
                            </div>
                          </div>
                      </div>
                      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>           
                    </td>
                </tr>
            <?php endforeach; ?>
            </body>
            
        </table>
       
   
    </body>
    
    <!--agar tampilan list lebih bagus-->
    <script type="text/javascript">
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class=" text-center">
             <h6>&copy; copyright 2022. <b>Tim Coding Skensa.</b> All Right Reserved.</h6>
        </div> 
</html>