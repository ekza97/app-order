
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <!-- <a href="#"><img src="assets/img/logo/logo.png" alt="" /></a> -->
                        <a href="" style="color:white;"><h3>Rumah Makan Sabar Menanti</h3></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="float:right;padding-top:7px;">
                    <div class="logo-area">
                        <!-- <a href="#"><img src="assets/img/logo/logo.png" alt="" /></a> -->
                        <a href="<?php echo $url; ?>/proses/logout.php" style="color:white;"><h4><?php echo $_SESSION['nama']; ?></h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php if(isset($home)) echo $home; ?>"><a href="?"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li class="<?php if(isset($meja)) echo $meja; ?>"><a data-toggle="tab" href="#meja"><i class="notika-icon notika-edit"></i> Meja</a>
                        </li>
                        <li class="<?php if(isset($makanan)) echo $makanan; ?>"><a data-toggle="tab" href="#makanan"><i class="notika-icon notika-edit"></i> Makanan</a>
                        </li>
                        <li class="<?php if(isset($minuman)) echo $minuman; ?>"><a data-toggle="tab" href="#minuman"><i class="notika-icon notika-edit"></i> Minuman</a>
                        </li>
                        <li class="<?php if(isset($laporan)) echo $laporan; ?>"><a data-toggle="tab" href="#laporan"><i class="notika-icon notika-bar-chart"></i> Laporan</a>
                        </li>
                        <li class="<?php if(isset($pengaturan)) echo $pengaturan; ?>"><a data-toggle="tab" href="#pengaturan"><i class="notika-icon notika-settings"></i> Pengaturan</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="meja" class="tab-pane <?php if(isset($meja)) echo $meja; ?> notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo $url; ?>?meja">Data Meja</a>
                                </li>
                                <?php
                                    if(isset($_GET['meja'])){
                                ?>
                                <li><a data-toggle="modal" data-target="#addmeja" style="cursor: pointer;">Tambah Meja</a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <div id="makanan" class="tab-pane <?php if(isset($makanan)) echo $makanan; ?> notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo $url; ?>?makanan">Data Makanan</a>
                                </li>
                                <?php
                                    if(isset($_GET['makanan'])){
                                ?>
                                <li><a data-toggle="modal" data-target="#addmakanan" style="cursor: pointer;">Tambah Makanan</a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <div id="minuman" class="tab-pane <?php if(isset($minuman)) echo $minuman; ?> notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo $url; ?>?minuman">Data Minuman</a>
                                </li>
                                <?php
                                    if(isset($_GET['minuman'])){
                                ?>
                                <li><a data-toggle="modal" data-target="#addminuman" style="cursor: pointer;">Tambah Minuman</a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <div id="laporan" class="tab-pane <?php if(isset($laporan)) echo $laporan; ?> notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo $url; ?>proses/exportmeja.php" target="_blank">Laporan Data Meja</a>
                                </li>
                                <li><a href="<?php echo $url; ?>proses/exportmakanan.php" target="_blank">Laporan Data Makanan</a>
                                </li>
                                <li><a href="<?php echo $url; ?>proses/exportminuman.php" target="_blank">Laporan Data Minuman</a>
                                </li>
                                <li><a href="<?php echo $url; ?>?lappenjualan">Laporan Penjualan</a>
                                </li>
                            </ul>
                        </div>
                        <div id="pengaturan" class="tab-pane <?php if(isset($pengaturan)) echo $pengaturan; ?> notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo $url; ?>?user">Manajemen Users</a>
                                </li>
                                <li><a href="<?php echo $url; ?>?backup">Backup</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

<?php

?>

