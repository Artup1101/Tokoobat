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
    
    span{
        text-align:right;
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
        <a class="nav-link" href="indexadmin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2admin.php">Obat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index3admin.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="andex4admin.php">Data User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class="ak">
  <span class="navbar-text">
       Admin Artup
    </span>
  </div>
  
</nav> 
<center><h1>DATA USER</h1>
<?php 
    include "koneksi.php";

    $query = "SELECT * FROM logreg";

    $sql = mysqli_query($connect, $query);
    $num = mysqli_num_rows($sql);
    ?>
    <table border='1'></center>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th colspan = '1'>Aksi</th>    
    </tr>
    <?php
    while( $data = mysqli_fetch_assoc($sql) ){

        echo "<tr>";
        echo "<td>".$data['Username']."</td>";
        echo "<td>".$data['Password']."</td>";
        echo "<td> <a href = 'Hapus.php?Username=".$data['Username']."'
        onclick = 'return confirm (\"APAKAH ANDA YAKIN INGIN MENGHAPUS DATA ?\")'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>