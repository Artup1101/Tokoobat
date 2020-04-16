<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proses</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['Username'];
   $password = $_POST['Password'];   
   $sql = "SELECT *from logreg where Username = '$username'";
   $query = $connect->query($sql);
   $hasil = $query->fetch_assoc();

   if($query->num_rows == 0) {
     echo "<div align='center'>
     !!Akun Belum Terdaftar!! <br>
     <a href='login.php'>Mau Login Lagi</a>
     <a href='register.php'>Daftar Akun Lain</a></div>";
   } 
   else {
     if($password == $hasil['password'] && $username == $hasil['username']) {
       echo "<div align='center'>Username/Password salah! <br>
       <a href='login.php'>Back</a></div>";
     }
     else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
    }    
   
?>
</body>
</html>