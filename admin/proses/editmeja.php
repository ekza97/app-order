<?php
session_start();
include ('../inc/koneksi.php');
$idlogin    = $_SESSION['id'];
$idmeja 	= $_POST['idmeja'];
$namameja	= $_POST['namameja'];

$msg = "";

$sql = "UPDATE meja SET namameja='$namameja',created=NOW(),createdby='$idlogin' WHERE idmeja='$idmeja'";

$query = mysqli_query($con,$sql) or die(mysqli_error($con));

if ($query) {
	$msg = "Data berhasil diubah";
    $_SESSION['msg']=$msg;
    header("location:../?meja&msg=success");
}else{
	$msg = "Data gagal diubah";
    $_SESSION['msg']=$msg;
    header("location:../?meja&msg=error");
}

?>