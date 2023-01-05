
<?php
include('../config/connection.php');


if(isset($_FILES['image'])){
   $errors= array();
   $file_name = $_FILES['image']['name'];
   $file_size =$_FILES['image']['size'];
   $file_tmp =$_FILES['image']['tmp_name'];
   $file_type=$_FILES['image']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
   
   $extensions= array("jpeg","jpg","png","jfif");
   
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

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];



$insert = mysqli_query($connect, "INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin', kelas='$kelas', file='images/$file_name'");

if ($insert)
    header('Location: list.php');
else
    echo 'Input data gagal';
//parameter 1 = menerima connect
//parameter 2 = menerima query
//insert      = menambahkan data
//$_POST      = mengambil data
?>