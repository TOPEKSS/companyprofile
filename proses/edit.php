<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.5/dist/bootstrap-validate.js" ></script> -->
</head>
<body>
<?php

include('../config/connection.php');

// $id = $_POST['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan where id = '" . $_GET['id'] . "'");


$results = mysqli_fetch_array($query, MYSQLI_ASSOC);
// var_dump($results);
// die;
?>
<nav class="navbar navbar-expand-lg nav-light bg-light fixed-top">
        <div class="container">
        <div class="gambar"><img class="rounded-circle" src="../foto/logo.png " width='40' height='40'  alt=""></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav offset-lg-8 mb-2 mb-lg-1">
              <li class="nav-item">
                <section id="home">
                <a class="nav-link active" href="../index.php"><b>Home</b></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="list.php"><b>Data Siswa</b></a>
              </li>    
              <li class="nav-item">
                <a class="nav-link" href="../Kontak.php"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../profile.php"><b>About</b></a>
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
      
      <br>
    <div class="card text-bg-light">
  <img src="bgputih.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"><!--isi sendiri--></h5>
    <p class="card-text"> <div class="container" > 
      <br><br> 
    <div class="text-center text-dark"> 
    <b><h3> Edit Data Siswa</h3></b></div>
    
    <table border="4" width="100%" height="430px">
      <tr>
        <th>
        
        <div class="container" >
<div class="row justify-content-center">
    <form action="update.php" method="post" class="row g-3 needs-validation" enctype="multipart/form-data">

    <input type="hidden" name="id" value="  <?php echo $results['id']?>">
    
    <div class="col-md-4" >
      <label for="validationCustom01" class="form-label text-dark">NAMA :</label>
      <input type="text" name="nama" class="form-control" id="validationCustom01" value="<?php echo $results['nama']?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label text-dark">ALAMAT :</label>
      <input type="text" name="alamat" class="form-control" id="validationCustom02" value="<?php echo $results['alamat']?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label text-dark">UMUR :</label>
      <div class="input-group has-validation" >
        <input type="text" name="umur" onkeypress="return hanyaAngka(event); "class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $results['umur']?>" required >
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    
    <label class="form-label text-dark">JENIS KELAMIN :</label><br/>
          <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
          <option value="Pria" <?php echo ($results['jenis_kelamin'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
            <option value="Wanita" <?php echo ($results['jenis_kelamin'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
          </select>
          <div class="col-md-4" >
      <label for="validationCustom01" class="form-label text-dark">KELAS :</label>
      <input type="text" name="kelas" class="form-control" id="validationCustom01" value="<?php echo $results['kelas']?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>   
    <br><br>
   
    <script type="text/javascript">
      function hanyaAngka(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
      }
    </script>
   
   <?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

      <form action="" method="POST" enctype="multipart/form-data" class="form-select" aria-label="Default select example">
         <input type="file" name="image" />
         <button type="submit" name="submit" class="btn btn-secondary"><b>EDIT</b></button>
         <!-- <input type="submit" name="submit"/> -->
      </form>
        </th>
      </tr>
    </table> 
</form>
</div>
</p>
<center>
   
  </div>
</div>  
</div>
</div>


    

</body>
</html>

<!-- <html>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="  < ?php echo $result[0]['id']?>">

        <label>Nama</label><br/>
        <input type="text" name="nama" value="">
        <br/><br/>

        <label>Alamat</label><br/>
        <textarea name="alamat" cols="30" rows="10"></textarea>

        <br/><br/>
        <label>Umur</label><br/>
        <input type="text" name="umur" value="">

        <br/><br/>
        <label>Jenis Kelamin</label><br/>
        <select name="jenis_kelamin">
            <option value="Pria" < ?php echo ($result[0]['jenis_kelamin'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
            <option value="Wanita" < ?php echo ($result[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
        </select>
        <br><br>
        <label>Kelas</label><br/>
        <input type="text" name="kelas" value="">
        <br><br>
        <button type="submit">Update</button>
    </form>
</html> -->