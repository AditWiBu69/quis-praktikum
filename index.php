<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>absensi mahasiswa</title>
</head>
<body>
    <h2 align="center">Absensi Mahasiswa</h2>
    <a href="tambah.php">Tambah</a>
    <br>
    <table border="1" width="52%" align="center" id="mytable"  style="border-collapse: collapse;">
        <tr>
            <th>npm</th>
            <th>nama</th>
            <th>kelas</th>
            <th>kehadiran</th>
            <th colspan="2">option</th>
        </tr>

   <?php
   include "koneksi.php";
   $data = mysqli_query($conn,"SELECT * FROM mahasiswa");
   while($d = mysqli_fetch_array($data)) {
   ?>
   <td><?php echo $d['npm'];?></td>
   <td><?php echo $d['nama'];?></td>
   <td><?php echo $d['kelas'];?></td>
   <td><?php echo $d['kehadiran'];?></td>
<td>
<a href="hapus1.php?delete_data=<?php echo $d['npm']; ?>">HAPUS</a>
<a href="edit.php?edit_data=<?php echo $d['npm']; ?>">edit</a>
</td>

   </tr>
<?php }?>
</body>
</html>