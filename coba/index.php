<?php
require_once('connection.php');

$sql = "SELECT * FROM orderdetail" ;
$query = mysqli_query($con,$sql);
$array = array();
if(mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_assoc($query)){
        $array[]=$row;
    }

    foreach ($array as $data) {

        $item_idUser = $data['id_user'];
        $item_idBarang = $data['id_barang'];
        $item_qty = $data['qty'];
        $item_kode = $data['kode_order'];

        $sql_save = "INSERT INTO pesan (id,id_barang,qty,kode_order)  VALUES ('".$item_idUser."','".$item_idBarang."','".$item_qty."','".$item_kode."')";
        $query_save = mysqli_query($con,$sql_save);

        if($query_save){
            echo "success";
        }else{
            echo "filed";
        }

    
    }
    echo mysql_get_client_info();
   
    
}
mysqli_close($con);