<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.5/dist/bootstrap-validate.js" ></script>

</head>
<body>
<html>
<nav class="navbar navbar-expand-lg nav-light bg-light fixed-top">
        <div class="container">
          <div class="gambar"><img src="logo.png" alt=""></div>
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
                <a class="nav-link" href="list.php"><b>Data Siswa</b></a>
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
      <!--<table border="1" width="400px" height="450px" text-align="center">
        <tr>
            <th>
            <h3>Login!</h3>
            <form action="insert.php" method="post">
        <label>Nama</label><br/>
        <input type="text" name="nama">
        <br/><br/>

        <label>Alamat</label><br/>
       <textarea name="alamat" ></textarea>
       cols="40" rows="3

        <br/><br/>
        <label>Umur</label><br/>
        <input type="text" name="umur">

        <br/><br/>
        <label>Jenis Kelamin</label><br/>
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br><br>
        <button type="submit">Tambah</button>
    </form>
            </th>
        </tr>
    </table>-->

    <br>
    <div class="card text-bg-light">
  <img src="bgputih.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"><!--isi sendiri--></h5>
    <p class="card-text"> <div class="container" > 
      <br><br>
      <div class="text-center text-dark"> 
    <b><h3> Tambah Data Siswa!</h3></b></div>    
    <table border="4" width="100%" height="430px">
      <tr>
        <th>
        
        <div class="container" >
<div class="row justify-content-center">
    <form action="insert.php" method="post" class="row g-3 needs-validation" enctype="multipart/form-data">
    
    <div class="col-md-4" >
      <label for="validationCustom01" class="form-label text-dark">NAMA :</label>
      <input type="text" name="nama" class="form-control" id="validationCustom01" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label text-dark">ALAMAT :</label>
      <input type="text" name="alamat" class="form-control" id="validationCustom02" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label text-dark">UMUR :</label>
      <div class="input-group has-validation" >
        <input type="text" name="umur" onkeypress="return hanyaAngka(event); "class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required >
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    
    <label class="form-label text-dark">JENIS KELAMIN :</label>
          <select name="jenis_kelamin" class="form-select text-dark" aria-label="Default select example">
              <option value="Pria" ><b>Pria</b></option>
              <option value="Wanita"><b>Wanita</b></option>
          </select>
          <div class="col-md-4" >
      <label for="validationCustom01" class="form-label text-dark">KELAS :</label>
      <input type="text" name="kelas" class="form-control" id="validationCustom01" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <br><br>
    <!--<div class="col-md-6">
      <label for="validationCustom03" class="form-label">City</label>
      <input type="text" name="jenis_kelamin" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">State</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>-->
   

    <!--dibawah ini agar input yang dimasukkan berupa angka saja-->
    <script type="text/javascript">
      function hanyaAngka(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
      }
    </script>
   
 

      <form action="" method="POST" enctype="multipart/form-data" class="form-select text-dark" aria-label="Default select example">
         <input type="file" name="image" />
         <button type="submit" name="submit" class="btn btn-secondary"><b>TAMBAH</b></button>
      </form>


    <!--<div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>-->

        </th>
      </tr>
    </table>
    
</form>
</div></p>
  </div>
</div> 
</div>
</div>
    <div class="text-center">
             <h6>&copy; copyright 2022. <b>Tim Coding Skensa.</b> All Right Reserved.</h6>
        </div> 
</body>
</html>
