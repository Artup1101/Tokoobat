<?php 
include "koneksi.php";

$id = $_GET['id_barang'];

$query = "DELETE FROM obat WHERE id_barang = $id";

$result = mysqli_query($connect,$query);

$num= mysqli_affected_rows($connect);


if($num>0){
    echo "Berhasil Hapus Data<br>";
}
else{
    echo "Gagal Hapus Data<br>";
}
echo "<a href='index2admin.php'>Lihat Data Gayn</a>"

?>