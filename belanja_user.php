<?php
require_once("koneksi.php");

$tgl_pesan=date("Y-m-d");
$jam =$_POST['jam'];
$qty = $_POST['qty'];
$total = $_POST['total'];
$id_user =$_POST['id_user'];
$id_barang =$_POST['id_barang'];
$kode_order =$_POST['kode_order'];
$sql_save = "INSERT INTO pesan (id_order,tgl_pesan,jam,qty,total,id,id_barang,kode_order) VALUES (null,'$tgl_pesan','$jam','$qty','$total','$id_user','$id_barang','$kode_order')";
$query = mysqli_query($conn,$sql_save);

if($query>0){
    echo "success";
}else{
    echo"filed";

}
mysqli_close($conn);

?>