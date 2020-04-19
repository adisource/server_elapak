<?php
include_once('koneksi.php');

$nik_user = $_GET['nik'];
$sql = "SELECT * FROM user WHERE nik = '$nik_user' ";
$res = mysqli_query($conn,$sql);
$arr = array();
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $arr[] = $row;
    }
    echo json_encode($arr);
}

mysqli_close($conn);


?>