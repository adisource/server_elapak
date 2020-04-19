<?php
require_once('koneksi.php');
$id_user = $_POST['id_user'];
$sql = "SELECT barang.id_barang,barang.nama_barang,barang.harga,barang.gambar,orderdetail.qty,barang.stok,suplayer.nama
FROM barang,orderdetail,suplayer WHERE orderdetail.id_barang=barang.id_barang AND orderdetail.kode_order LIKE 'KC%'AND barang.id_suplayer=suplayer.id_suplayer AND orderdetail.id_user='$id_user' and orderdetail.status=0";

$query = mysqli_query($conn,$sql);
$array = array();
if(mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_assoc($query)){
        $array[]=$row;
    }
    echo json_encode($array);
}
mysqli_close($conn);

?>