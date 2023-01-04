<?php
session_start();

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "login";
$koneksi = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);

$err = "";
$username = "";
$ingataku = "";


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ingataku = $_POST['ingataku'];

    if($username == '' or $password == ''){
      $err .= "<li>Silahkan masukkan nama username dan juga password.</li>";
    }else{
      $sql1 = "select * from login where username = '$username'";
      $q1   = mysqli_query($koneksi,$sql1);
      $r1   = mysqli_fetch_array($q1);
    if($r1['username'] == ''){
      $err .= "<li>Username <b>$username</b> tidk tersedia.</li>";
    }elseif($r1['password'] != md5($password)){
      $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
    } 
     if(empty($err)){
      $_SESSION['session_username'] = $username;
      $_SESSION['session_password'] = md5($password);

      if($ingataku == 1){
        $cookie_name = "cookie_username";
        $cookie_value = $username;
        $cookie_time = time() + (60 * 60 * 24 * 30);
        setcookie($cookie_name,$cookie_value,$cookie_time,"/");

        $cookie_name = "cookie_password";
        $cookie_value = md5($password);
        $cookie_time = time() + (60 * 60 * 24 * 30);
        setcookie($cookie_name,$cookie_value,$cookie_time,"/");
      }
      header("location:anggota.php");
     }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
<?php if($err){ ?>
  <div id="login-alert" class="alert alert-danger col-sm12">
    <ul><?php echo $err ?></ul>
  <?php }?>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="username"  value="<?php echo $username?> "class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="ingataku" value="1" <?php if($ingataku == '1') echo "checked"?> class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>



</body>
</html>