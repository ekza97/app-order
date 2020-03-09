<?php
    include ('../inc/koneksi.php');
    if (isset($_POST['selesai'])) {
        $id = $_POST['id'];

        $count=count($id);
        for($i=0;$i<$count;$i++){
            $sql="UPDATE pesanan SET  status='selesai' WHERE idpesanan='" . $id[$i] . "'";
            $result=mysqli_query($con,$sql);
        }
        header("location:../");
    }
echo "ok";
?>