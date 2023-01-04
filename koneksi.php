<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "dbsiswa";

$koneksi = mysqli_connect($host, $user, $pass);

if ($koneksi) {
    $buka = mysqli_select_db($koneksi, $database);

    if (!$buka) {
        echo "database tidak terhubung";
    }
} else {
    echo "mysql tidak terhubung";
}