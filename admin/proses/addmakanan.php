<?php
session_start();
include ('../inc/koneksi.php');
$idlogin    = $_SESSION['id'];
$nama	    = $_POST['nama'];
$harga	    = $_POST['harga'];
$image      = $_FILES['image'];

$msg = "";

$imgname = $_FILES['image']['name'];
$imgtmp = $_FILES['image']['tmp_name'];
$imgsize = $_FILES['image']['size'];
$imgtype = $_FILES['image']['type'];
$imgext = explode('.', $imgname);
$imgactext = strtolower(end($imgext));
$allowed = array('jpg','jpeg','png','bmp');
if (in_array($imgactext, $allowed)) {
    if ($imgsize<1000000) {
        $imgnew = "makanan-".date('YmdHis').".".$imgactext;
        $imgfolder = '../img/makanan/'.$imgnew;
        move_uploaded_file($imgtmp, $imgfolder);
        
        $sql = "INSERT INTO makanan (idmakanan,namamakanan,harga,image,created,createdby) VALUES ('','$nama','$harga','$imgnew',now(),'$idlogin')";

        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
        
        if ($query) {
            $msg = "Data berhasil ditambahkan";
            $_SESSION['msg']=$msg;
            header("location:../?makanan&msg=success");
        }else{
            $msg = "Data gagal ditambahkan";
            $_SESSION['msg']=$msg;
            header("location:../?makanan&msg=error");
        }
    }else{
        $msg = "Ukuran gambar terlalu besar.";
        $_SESSION['msg']=$msg;
        header("location:../?makanan&msg=error");
    }
}else{
    $msg = "Type gambar tidak sesuai.";
    $_SESSION['msg']=$msg;
    header("location:../?makanan&msg=error");
}


?>