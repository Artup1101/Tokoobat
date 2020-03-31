<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    table{
      width: 80%;
    }
  </style>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Toko Obat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">Obat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index3.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
  </div>
  
</nav> 
<center><h1>DATA OBAT</h1>
<?php 
    include "koneksi.php";

    $query = "SELECT * FROM obat";

    $sql = mysqli_query($connect, $query);
    $num = mysqli_num_rows($sql);
    ?>
    <table border='1'></center>
    <tr>
        <th>Nomor</th>
        <th>Obat</th>
        <th>Fungsi</th>
        <th colspan = '3'>Aksi</th>    
    </tr>
    <?php
    while( $data = mysqli_fetch_assoc($sql) ){

        echo "<tr>";
        echo "<td>".$data['Nomor']."</td>";
        echo "<td>".$data['Obat']."</td>";
        echo "<td>".$data['Tujuan']."</td>";
        echo "<td> <a href = 'proses-tambah.php'>Tambah</a></td>";
        echo "<td> <a href = 'form-update.php?Nomor=".$data['Nomor']."'>Edit</a></td>";
        echo "<td> <a href = 'Hapus.php?Nomor=".$data['Nomor']."'
        onclick = 'return confirm (\"APAKAH ANDA YAKIN INGIN MENGHAPUS DATA ?\")'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>