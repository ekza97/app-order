<?php
    include ('../../admin/inc/koneksi.php');
    if (isset($_GET['meja'])!="") {
        $id = $_GET['meja'];
        $query = mysqli_query($con, "SELECT namameja FROM meja WHERE idmeja='$id'")or die(mysqli_error($con));
        $data = mysqli_fetch_array($query);
        session_start();
        $_SESSION['idmeja']=$id;
        $_SESSION['namameja']=$data['namameja'];
        ?><script>window.location.href="../"</script><?php
    }else{
        ?><script>window.location.href="../../"</script><?php
    }
?>