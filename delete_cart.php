<?php
require_once("koneksi.php");
$id_barang =$_POST['id_barang'];

$query_cek = mysqli_query($conn,"DELETE FROM orderdetail  WHERE id_barang ='$id_barang'");

if($query_cek){
    echo "success";
}else{
    echo"filed";
}
mysqli_close($conn);

?>