<?php
session_start();
include ('../inc/koneksi.php');
$idlogin    = $_SESSION['id'];
$namameja	= $_POST['namameja'];

$msg = "";

$sql = "INSERT INTO meja (idmeja,namameja,created,createdby) VALUES ('','$namameja',now(),'$idlogin')";

$query = mysqli_query($con,$sql) or die(mysqli_error($con));

if ($query) {
	$msg = "Data berhasil ditambahkan";
	$_SESSION['msg']=$msg;
    header("location:../?meja&msg=success");
}else{
	$msg = "Data gagal ditambahkan";
	$_SESSION['msg']=$msg;
    header("location:../?meja&msg=error");
}

?>