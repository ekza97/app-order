<?php
    session_start();
    include ('../../admin/inc/koneksi.php');
    if (isset($_POST['pesan'])) {
        $check = $_POST['checked'];
        $idm   = $_SESSION['idmeja'];
        $jml   = $_POST['jumlah'];

        $count=count($jml);
        for($i=0;$i<$count;$i++){
            $sql="UPDATE pesanan SET jumlah='" . $jml[$i] . "', status='proses' WHERE idpesanan='" . $check[$i] . "'";
            $result=mysqli_query($con,$sql);
        }
        header("location:../");
    }

?>
