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
   $username = $_POST['Username'];
   $password = $_POST['Password'];   

   if($username == 'admin' || $password =='admin') {
    header('location:indexadmin.php');
   } 
   else {
       echo "<div align='center'>Username/Password salah! <br>
       <a href='loginadmin.php'>Back</a></div>";
    }    
   
?>
</body>
</html>