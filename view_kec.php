<?php
require_once('koneksi.php');
//$id_kab= $_GET['id_kab'];
$sql = "SELECT *FROM  data_kawasan  GROUP BY kecamatan" ;
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