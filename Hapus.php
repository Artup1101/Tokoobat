<?php 
include "koneksi.php";

$id_user = $_GET['Id_user'];

$query = "DELETE FROM data_user WHERE Id_user = $id_user";

$result = mysqli_query($connect,$query);

$num= mysqli_affected_rows($connect);


if($num>0){
    echo "Berhasil Hapus Data<br>";
}
else{
    echo "Gagal Hapus Data<br>";
}
echo "<a href='read.php'>Lihat Data Gayn</a>"

?>