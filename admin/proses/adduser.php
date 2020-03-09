<?php
session_start();
include ('../inc/koneksi.php');
$idlogin    = $_SESSION['id'];
$fullname	= $_POST['fullname'];
$username	= $_POST['username'];
$password	= $_POST['password'];

$msg = "";

$sql = "INSERT INTO users (idusers,fullname,username,password,created,createdby) VALUES ('','$fullname','$username','$password',now(),'$idlogin')";

$query = mysqli_query($con,$sql) or die(mysqli_error($con));

if ($query) {
	$msg = "Data berhasil ditambahkan";
	$_SESSION['msg']=$msg;
    header("location:../?user&msg=success");
}else{
	$msg = "Data gagal ditambahkan";
	$_SESSION['msg']=$msg;
    header("location:../?user&msg=error");
}

?>