<?php
session_start();
include ('../../admin/inc/koneksi.php');
$idlogin    = $_SESSION['idmeja'];
$idpilih    = $_GET['id'];
$minuman = mysqli_query($con, "SELECT * FROM minuman WHERE idminuman='$idpilih'")or die(mysqli_error($con));
$data = mysqli_fetch_array($minuman);
$namapesanan = $data['namaminuman'];
$date = date('Y-m-d');

$msg = "";

$sql = "INSERT INTO pesanan (idpesanan,meja_idmeja,tanggal,namapesanan,jumlah,status,created) VALUES ('','$idlogin','$date','$namapesanan',0,'baru',now())";

$query = mysqli_query($con,$sql) or die(mysqli_error($con));

if ($query) {
	$kategori ="success";
	$msg = "Data berhasil ditambahkan";
    $_SESSION['msg']=$msg;
    header("location:../");
}else{
	$kategori ="error";
	$msg = "Data gagal ditambahkan";
	$_SESSION['msg']=$msg;
}

?>