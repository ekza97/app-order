
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
            <div class="row">
                <?php
                    $query = mysqli_query($con, "SELECT * FROM meja ORDER BY idmeja")or die(mysqli_error($con));
                    while ($meja=mysqli_fetch_array($query)) {
                ?>
                <a href="?detailpesanan&id=<?php echo $meja['idmeja']; ?>">
                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" style="margin-bottom:20px;">
                        <div class="breadcomb-list" style="color:black;">
                            
                            <?php
                                $idmeja = $meja['idmeja'];
                                $sql = mysqli_query($con, "SELECT idpesanan,namapesanan,jumlah FROM pesanan WHERE meja_idmeja='$idmeja' AND status='proses'")or die(mysqli_error($con));
                                $countsql = mysqli_num_rows($sql);
                            ?>
                            <table>
                                <tr>
                                    <td rowspan="2" style="padding-right:25px;font-size:50px;"><b><?php echo $countsql; ?></b></td>
                                    <td style="font-size:24px;"><?php echo $meja['namameja']; ?></td>
                                </tr>
                                <tr>
                                    <td>Pesanan Baru</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </a>
                <?php
                    }
                ?>
            </div>
		</div>
	</div>
	<!-- Breadcomb area End-->