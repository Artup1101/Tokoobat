<?php 
include "koneksi.php";

$id_user = $_GET['Id_user'];

$query = "SELECT * FROM data_user  WHERE  Id_user = '$id_user'";

$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update |  CRUD </title>
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
