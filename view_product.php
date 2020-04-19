<?php
require_once('koneksi.php');
$id_barang = $_POST['id_barang'];
$sql = "SELECT b.nama_barang,b.harga FROM barang AS b WHERE b.id_barang='$id_barang'" ;
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