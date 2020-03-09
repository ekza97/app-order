<?php
    include ('../../admin/inc/koneksi.php');
    if (isset($_GET['id'])!="") {
        $id = $_GET['id'];
        
        $query = mysqli_query($con, "DELETE FROM pesanan WHERE idpesanan='$id'")or die(mysqli_error($con));
        if ($query) {
            $kategorimsg ="success";
            $msg = "Data berhasil dihapus";
            $_SESSION['msg']=$msg;
            ?><script>window.location.href="../"</script><?php
        }else{
            $kategorimsg ="error";
            $msg = "Data gagal dihapus";
            $_SESSION['msg']=$msg;
        }
    }
?>