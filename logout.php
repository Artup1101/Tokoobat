<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link rel="stylesheet" type="text/css" href="halaman.css">
</head>
<body>
<?php
   session_start();
   session_destroy();
?>

<div class='yoamanta' align="center">
  <h1>Anda telah logout</h1>
</div> 
<div class='Aku' align='center'>
<b>Silahkan Keluar</b> 
  <a href="login.php" text-align='center'>Login</a>
</div>
  
</body>
</html>