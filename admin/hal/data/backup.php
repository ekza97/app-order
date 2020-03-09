
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
            <?php  
                if ($_GET['msg']=="success") { ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?php echo $_SESSION['msg']; ?>
                    </div>
                <?php } 
                if ($_GET['msg']=="error") { ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?php echo $_SESSION['msg']; ?>
                    </div>
                <?php }
                ?>
                <script>
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove();
                        });
                    }, 10000);
                </script>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Untuk menghindari hilangnya data, lakukan backup secara berkala.</h2>
                    </div>
                    <div class="table-responsive">
                        <p>Nama Database : cafe</p>
                        <p>Nama Tabel :
                        <?php
                            $query = mysqli_query($con,"SHOW TABLES");
                            while($tabel = mysqli_fetch_row($query)){
                                echo "<li style='margin-left:15px;'>";
                                echo $tabel[0];
                                echo "</li>";
                            }
                        ?></p>
                        <a href="<?php echo $url; ?>proses/backup.php" class="btn btn-primary">Backup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->