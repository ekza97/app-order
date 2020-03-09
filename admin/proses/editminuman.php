<?php
session_start();
include ('../inc/koneksi.php');
$idlogin    = $_SESSION['id'];
$idminuman 	= $_POST['idminuman'];
$nama   	= $_POST['nama'];
$harga  	= $_POST['harga'];
$image      = $_FILES['image'];
$image_v    = $_POST['image_v'];

$msg = "";

$imgname = $_FILES['image']['name'];
$imgtmp = $_FILES['image']['tmp_name'];
$imgsize = $_FILES['image']['size'];
$imgtype = $_FILES['image']['type'];
$imgext = explode('.', $imgname);
$imgactext = strtolower(end($imgext));
$allowed = array('jpg','jpeg','png','bmp');
if ($imgname=="") {
    $sql = "UPDATE minuman SET namaminuman='$nama',harga='$harga',created=NOW(),createdby='$idlogin' WHERE idminuman='$idminuman'";

    $query = mysqli_query($con,$sql) or die(mysqli_error($con));

    if ($query) {
        $msg = "Data berhasil diubah";
        $_SESSION['msg']=$msg;
        header("location:../?minuman&msg=success");
    }else{
        $msg = "Data gagal diubah";
        $_SESSION['msg']=$msg;
        header("location:../?minuman&msg=error");
    }
}else{
    if (in_array($imgactext, $allowed)) {
        if ($imgsize<1000000) {
            $imgvfolder = '../img/minuman/'.$image_v;
            unlink($imgvfolder);
            $imgnew = "minuman-".date('YmdHis').".".$imgactext;
            $imgfolder = '../img/minuman/'.$imgnew;
            move_uploaded_file($imgtmp, $imgfolder);
            
            $sql = "UPDATE minuman SET namaminuman='$nama',harga='$harga',image='$imgnew',created=NOW(),createdby='$idlogin' WHERE idminuman='$idminuman'";
    
            $query = mysqli_query($con,$sql) or die(mysqli_error($con));
            
            if ($query) {
                $msg = "Data berhasil ditambahkan";
                $_SESSION['msg']=$msg;
                header("location:../?minuman&msg=success");
            }else{
                $msg = "Data gagal ditambahkan";
                $_SESSION['msg']=$msg;
                header("location:../?minuman&msg=error");
            }
        }else{
            $msg = "Ukuran gambar terlalu besar.";
            $_SESSION['msg']=$msg;
            header("location:../?minuman&msg=error");
        }
    }else{
        $msg = "Type gambar tidak sesuai.";
        $_SESSION['msg']=$msg;
        header("location:../?minuman&msg=error");
    }
}



?>