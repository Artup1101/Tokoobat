<?php
include "koneksi.php";

$id_user = $_POST['Id_user'];
$nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Telepon = $_POST['Telp'];
$Level_user = $_POST['Level_user'];

$query = "UPDATE data_user SET  Nama = '$nama', Alamat = '$Alamat', Telp = '$Telepon',Level_user = '$Level_user' WHERE Id_user='$id_user'" ;

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num>0){
    echo "Berhasil Update Data<br>";
}
else{
    echo "Gagal Update Data<br>";
}
echo "<a href='read.php'>Lihat Data Gayn</a>"

?>

