
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div style="float:right;">
                    <a download="<?php echo $url; ?>proses/cetakhari.php" href="<?php echo $url; ?>proses/cetakhari.php" class="btn btn-info btn-sm" target="_blank" style="margin-bottom:20px;">Cetak Hari Ini</a>
                    <a href="<?php echo $url; ?>proses/cetakbulan.php" class="btn btn-info btn-sm" target="_blank" style="margin-bottom:20px;">Cetak Bulan Ini</a>
                    <a href="<?php echo $url; ?>proses/cetaktahun.php" class="btn btn-info btn-sm" target="_blank" style="margin-bottom:20px;">Cetak Tahun Ini</a>
                    <a href="<?php echo $url; ?>proses/cetaksemua.php" class="btn btn-info btn-sm" target="_blank" style="margin-bottom:20px;">Cetak Semua</a>
                </div>
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Laporan Penjualan</h2>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="80">Tanggal</th>
                                    <th width="100">Nama Meja</th>
                                    <th>Nama Pesanan</th>
                                    <th width="50">Jumlah</th>
                                    <th width="40">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $sql = mysqli_query($con, "SELECT * FROM pesanan,meja WHERE meja_idmeja=idmeja AND status BETWEEN 'proses' AND 'selesai' ORDER BY idpesanan DESC") or die (mysqli_error($con));
                                    while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['namameja']; ?></td>
                                    <td><?php echo $data['namapesanan']; ?></td>
                                    <td><?php echo $data['jumlah']; ?></td>
                                    <td>
                                        <?php 
                                        if($data['status']=="baru"){ ?>
                                            <button class="btn btn-info notika-btn-info btn-xs"><?php echo $data['status']; ?></button><?php
                                        }else if($data['status']=="proses"){ ?>
                                            <button class="btn btn-warning notika-btn-warning btn-xs"><?php echo $data['status']; ?></button><?php
                                        } else{ ?>
                                            <button class="btn btn-success notika-btn-success btn-xs"><?php echo $data['status']; ?></button><?php
                                        } ?>
                                    </td>
                                </tr> 
                                <?php
                                    }
                                ?> 
                            </tbody>
                            <tfoot>
                                <tr>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->