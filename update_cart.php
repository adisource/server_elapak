<?php
require_once("koneksi.php");
$qty =$_POST['qty'];
$id_barang =$_POST['id_barang'];
$total_h =$_POST['total_harga'];
$query_cek = mysqli_query($conn,"UPDATE orderdetail as o SET o.qty='$qty',o.total_harga='$total_h' WHERE id_barang ='$id_barang'");

if($query_cek){
    echo "success";
}else{
    echo"filed";
}
mysqli_close($conn);

?>