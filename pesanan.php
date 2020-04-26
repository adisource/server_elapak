<?php
require_once('koneksi.php');
$id_user = $_POST['id_user'];
$sql = "SELECT barang.id_barang,barang.nama_barang,barang.harga,barang.gambar,detail_pesanan.qty,barang.stok,suplayer.nama
FROM barang,detail_pesanan,suplayer WHERE detail_pesanan.id_barang=barang.id_barang AND barang.id_suplayer=suplayer.id_suplayer AND detail_pesanan.id_user='$id_user' and detail_pesanan.status=0";

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