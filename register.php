
</html><!DOCTYPE html>
<html lang="en">
<hea`d>
    <meta charset="UTF-8">
    <meta name="viewpo rt" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    .container{
      width: 30%;
      margin-top: 9%;
      box-shadow:0 3px 20px rgba(0,0,0,0.3);
      padding: 40px;
    }
    button {
      width: 100%;
    }
  </style>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <div class="container">
    <h4 class="text-center">Form Register</h4>
    <hr>
    <form method="post" action="prosesdaftar.php">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="Username" class="form-control" placeholder="Masukkan Username Anda">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="Password" class="form-control" placeholder="Masukkan Password Anda">
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
    <center>
    Sudah Punya Akun
    <a href='Login.php'>Login Disini</a>
    </center>
    </div>   

</body>
</html>