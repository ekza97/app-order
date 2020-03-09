<?php
session_start();
include ('../inc/koneksi.php');
$idlogin    = $_SESSION['id'];
$iduser 	= $_POST['iduser'];
$fullname	= $_POST['fullname'];
$username	= $_POST['username'];
$password	= $_POST['password'];

$msg = "";

$sql = "UPDATE users SET fullname='$fullname',username='$username',password='$password',created=NOW(),createdby='$idlogin' WHERE idusers='$iduser'";

$query = mysqli_query($con,$sql) or die(mysqli_error($con));

if ($query) {
	$msg = "Data berhasil diubah";
    $_SESSION['msg']=$msg;
    header("location:../?user&msg=success");
}else{
	$msg = "Data gagal diubah";
    $_SESSION['msg']=$msg;
    header("location:../?user&msg=error");
}

?>