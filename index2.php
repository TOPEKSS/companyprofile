<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian data</title>
</head>
<body bgcolor="lightblue">
    <h2 align="center">Data Siswa</h2>

<form method="GET" action="index2.php" style="text-align: center;">
    <label for="">pencarian</label>
    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari']; } ?>">
    <button type="submit">search</button>
</form>
    <table border="1" align="center" width="80%" height="" bgcolor="lighblue">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>umur</th>
            <th>jenis kelamin</th>
        </tr>

        <tr>
            <?php
            include "koneksi.php";
            if(isset($_GET['cari'])){
                $search = $_GET['cari'];
                $query = "select * from tbsiswa where id like '%".$pencarian."%'";
            } else {
                $query = "select * from tbsiswa";
            }

            $tampil = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($tampil)){
            ?>
            <td><?php echo $data ['id']; ?></td>
            <td><?php echo $data ['nama']; ?></td>
            <td><?php echo $data ['alamat']; ?></td>
            <td><?php echo $data ['umur']; ?></td>
            <td><?php echo $data ['jenis_kelamin']; ?></td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>