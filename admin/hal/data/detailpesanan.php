
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="?" class="btn btn-info btn-sm" data-toggle="modal" style="margin-bottom:20px;">Kembali</a>
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Detail Pesanan</h2>
                    </div>
                    <?php include "hal/notifikasi.php"; ?>
                    <div class="table-responsive">
                        <!-- disini -->
                        <form method="post" action="proses/prosespesanan.php">
                            <table class="table table-hover table-bordered">
                            <thead style="background:#18BC9C;">
                                <tr>
                                    <th width="20">No</th>
                                    <th scope="col">Nama pesanan</th>
                                    <th width="150">Jumlah pesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $idmeja = $_GET['id'];
                                    $query = mysqli_query($con, "SELECT idpesanan,namapesanan,jumlah FROM pesanan WHERE meja_idmeja='$idmeja' AND status='proses'")or die(mysqli_error($con));
                                    while ($pesan=mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td><input type="checkbox" class="form-control form-control-sm" name="id[]" value="<?php echo $pesan['idpesanan']; ?>" checked hidden><?php echo $no++; ?></td>
                                        <td><?php echo $pesan['namapesanan']; ?></td>
                                        <td style="text-align: center;">
                                            <?php echo $pesan['jumlah']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                    $count = mysqli_num_rows($query);
                                    if ($count == 0) { ?>
                                    <td colspan="4" style="text-align:center;">Tidak ada pesanan</td>
                                    <?php
                                    }
                                ?>
                            </tbody>
                            </table> 
                            <button type="submit" class="btn btn-success" style="float: right;" name="selesai">Pesanan Selesai</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->