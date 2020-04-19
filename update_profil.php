<?php
require_once("koneksi.php");
$nama = $_POST['nama'];
$nik =$_POST['nik'];
$tgl_lahir =$_POST['tgl_lahir'];
$nomer_hp =$_POST['no_hp'];
$jk = $_POST['jk'];
$email =$_POST['email'];
$status= $_POST['status'];

$sql = mysqli_query($conn,"UPDATE profil_user SET '$nama','$nik','$tgl_lahir','$nomer_hp','$jk','$email','$status' WHERE nik ='$nik'");

if($sql){
    echo "success";
}else{
    echo "failed";  
}



?>