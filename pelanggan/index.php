<?php
  session_start();
  include ('../admin/inc/koneksi.php');
  include ('inc/header.php');
  if ($_SESSION['namameja']=="") {
    header("location:../");
  }else{
    include ('inc/header_menu.php');
  ?>

  <div class="container-fluid" style="margin-top: 85px;">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active"><?php echo $_SESSION['namameja']; ?></li>
    </ol>
  </div>

  <?php
    include ('hal/index.php');
  }
  include ('inc/footer.php');
?>

