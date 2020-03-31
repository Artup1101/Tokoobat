<?php 
include "koneksi.php";

$id_user = $_GET['Obat'];

$query = "SELECT * FROM obat  WHERE  Obat = '$obat'";

$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<form action = 'update.php' method = post>
    <table>
    <tr>
        <td><label for="Nama">Nama</label></td>
        <td>:</td>
        <td><input type="text" name="Nama" id="Nama" value ="<?php echo $row['Nama']; ?>"></td>
    </tr>
    <tr>
        <td><label for="Alamat">Alamat</label></td>
        <td>:</td>
        <td><input type="text" name="Alamat" id="Alamat" value ="<?php echo $row['Alamat']; ?>"></td>
    </tr>    
    <tr>
        <td><label for="Telepon">Telepon</label></td>
        <td>:</td>
        <td><input type="text" name="Telp" id="Telp" value = "<?php echo $row['Telp']; ?>"></td>
    </tr>
    <tr>
        <td><label for="Level_user">Level_user</label></td>
        <td>:</td>
        <td><input type="text" name="Level_user" id="Level_user" value ="<?php echo $row['Level_user']; ?>"></td>
    </tr>
    <tr>
        <td><input type="hidden" name="Id_user"value ="<?php echo $row['Id_user']; ?>"></td>
        <td><input type="submit" value="Simpan" name="BtnSimpan"></td>
    </tr>    
   </table>
   </form>

</body>
</html>