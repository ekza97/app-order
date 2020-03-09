<?php
    error_reporting(0);
    session_start();
    include ('inc/koneksi.php');
    $url = "https://www.nokencode.com/apbw/admin/";
    include ('inc/header.php');

    if ($_SESSION['username']=="") {
        // include "../../";?><script>window.location.href = "../"</script><?php
    } else {
        if (isset($_GET['meja'])) {
            $meja = 'active';
        }else if (isset($_GET['makanan'])) {
            $makanan = 'active';
        }else if (isset($_GET['minuman'])) {
            $minuman = 'active';
        }else if (isset($_GET['laporan'])) {
            $laporan = 'active';
        }else if (isset($_GET['user'])) {
            $pengaturan = 'active';
        }else if (isset($_GET['backup'])) {
            $pengaturan = 'active';
        } else {
            $home = 'active';
        }

    include ('inc/header_menu.php');
    
        if (isset($_GET['meja'])) {
            include "hal/data/meja.php";
        }
        else if (isset($_GET['makanan'])) {
            include "hal/data/makanan.php";
        }
        else if (isset($_GET['addmakanan'])) {
            include "hal/data/addmakanan.php";
        }
        else if (isset($_GET['minuman'])) {
            include "hal/data/minuman.php";
        }
        else if (isset($_GET['addminuman'])) {
            include "hal/data/addminuman.php";
        }
        else if (isset($_GET['lapmeja'])) {
            include "proses/exportmeja.php";
        }
        else if (isset($_GET['lappenjualan'])) {
            include "hal/data/lappenjualan.php";
        }
        else if (isset($_GET['detailpesanan'])) {
            include "hal/data/detailpesanan.php";
        }
        else if (isset($_GET['user'])) {
            include "hal/data/user.php";
        } 
        else if (isset($_GET['backup'])) {
            include "hal/data/backup.php";
        }  
        else {
            include "hal/data/home.php";
        }
        
    }

?>
<?php
    include ('inc/footer.php');
?>