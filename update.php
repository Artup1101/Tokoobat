<?php
include "koneksi.php";

$obat = $_POST['obat'];
$tujuan = $_POST['tujuan'];

$query = "UPDATE obat SET obat = '$obat', tujuan = '$tujuan'" ;

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num>0){
    echo "Berhasil Update Data<br>";
}
else{
    echo "Gagal Update Data<br>";
}
echo "<a href='index2admin.php'>Lihat Data Gayn</a>"

?>

