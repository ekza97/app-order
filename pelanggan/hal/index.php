   <div class="container-fluid" style="margin-top: 20px;">
      <div class="row">
         <div class="col-md-8">
            <div class="card border-success  mb-4" style="max-width: 80rem;margin:0px;">
              <div class="card-header bg-success" style="color: white;">Daftar Makanan & Minuman</div>
              <div class="card-body">
                  <h4 class="card-title breadcrumb">Makanan</h4>
                  <div class="row">
                    <?php
                      $query = mysqli_query($con, "SELECT * FROM makanan ORDER BY idmakanan")or die(mysqli_error($con));
                      while ($makanan=mysqli_fetch_array($query)) { ?>
                      <div class="col-md-6">
                          <div class="card mb-2" style="max-width: 20rem;">
                            <div class="card-body" style="text-align: center;">
                              <h5 class="card-title"><?php echo $makanan['namamakanan']; ?></h5>
                              <img src="img/img.jpg" width="200" height="100">
                            </div>
                            <div class="card-header bg-light">
                                Rp. <?php echo number_format($makanan['harga'],2,",","."); ?> &nbsp
                                <a href="proses/pesanmakan.php?id=<?php echo $makanan['idmakanan']; ?>" class="btn btn-info btn-sm" style="float: right;">Pilih</a>
                            </div>
                          </div>
                      </div> 
                    <?php
                      }
                    ?> 
                  </div>
                  <h4 class="card-title breadcrumb" style="margin-top: 10px;margin-bottom: 10px;">Minuman</h4>
                  <div class="row">
                    <?php
                      $query = mysqli_query($con, "SELECT * FROM minuman ORDER BY idminuman")or die(mysqli_error($con));
                      while ($makanan=mysqli_fetch_array($query)) { ?>
                      <div class="col-md-6">
                          <div class="card mb-2" style="max-width: 20rem;">
                            <div class="card-body" style="text-align: center;">
                              <h5 class="card-title"><?php echo $makanan['namaminuman']; ?></h5>
                              <img src="img/img.jpg" width="200" height="100">
                            </div>
                            <div class="card-header bg-light">
                                Rp. <?php $harga=$makanan['harga'];echo number_format($harga,2,",","."); ?> &nbsp
                                <a href="proses/pesanminum.php?id=<?php echo $makanan['idminuman']; ?>" class="btn btn-info btn-sm" style="float: right;">Pilih</a>
                            </div>
                          </div>
                      </div> 
                    <?php
                      }
                    ?> 
                  </div>  
              </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card border-success  mb-4" style="max-width: 80rem;margin:0px;">
              <div class="card-header bg-success" style="color: white;">Petunjuk Pemesanan</div>
              <div class="card-body">
                <h6 class="card-title">Perhatikan langkah-langkah berikut :</h6>
                <ol style="text-align: justify;">
                   <li> Pilihlah makanan atau minuman yang ingin anda beli.</li>
                   <li> Setelah anda selesai memilih silahkan perhatikan daftar pesanan anda.</li>
                   <li> Jika daftar pesanan anda sudah sesuai dengan yang anda pilih maka anda harus menekan tombol "<b>Pesan Sekarang</b>".</li>
                </ol>
              </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="card border-success  mb-4" style="max-width: 80rem;margin:0px;">
              <div class="card-header bg-success" style="color: white;">Daftar Pesanan Anda</div>
              <div class="card-body">
                  <form method="post" action="proses/pesan.php">
                      <table class="table table-hover table-bordered">
                       <thead class="table-success">
                         <tr>
                           <th width="20">No</th>
                           <th scope="col">Nama pesanan</th>
                           <th width="150">Jumlah pesanan</th>
                           <th width="50" style="text-align: center;">Aksi</th>
                         </tr>
                       </thead>
                       <tbody>
                          <?php
                            $no = 1;
                            $idmeja = $_SESSION['idmeja'];
                            $query = mysqli_query($con, "SELECT idpesanan,namapesanan,jumlah FROM pesanan WHERE meja_idmeja='$idmeja' AND status='baru'")or die(mysqli_error($con));
                            while ($pesan=mysqli_fetch_array($query)) { ?>
                            <tr>
                              <td><input type="checkbox" class="form-control form-control-sm" name="checked[]" value="<?php echo $pesan['idpesanan']; ?>" checked hidden><?php echo $no++; ?></td>
                              <td><?php echo $pesan['namapesanan']; ?></td>
                              <td style="text-align: center;">
                                  <input type="number" class="form-control form-control-sm" name="jumlah[]" placeholder="Jumlah" required>
                              </td>
                              <td>
                                  <a href="proses/delpesanan.php?id=<?php echo $pesan['idpesanan']; ?>" class="btn btn-danger btn-sm">Batalkan</a>
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
                     <button type="submit" class="btn btn-success" style="float: right;" name="pesan">Pesan Sekarang</button>
                  </form>
              </div>
            </div>
         </div>
      </div>
   </div>