
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                <?php include "hal/notifikasi.php"; ?> 
                <a href="#addminuman" class="btn btn-primary" data-toggle="modal">Tambah Minuman</a>
                <div class="modal fade" id="addminuman" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 style="margin-bottom:25px;">Tambah Minuman</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form action="<?php echo $url; ?>proses/addminuman.php" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Nama minuman" name="nama" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control" placeholder="Harga minuman" name="harga" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="file" class="form-control" name="image" required>
                                            </div>
                                                <span> Type gambar (jpg,jpeg,png,bmp) dan ukuran max 1 MB.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-default" name="simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Data Minuman</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped table-hover">
                            <thead style="background:#18BC9C;">
                                <tr>
                                    <th width="20px">No</th>
                                    <th>Nama Minuman</th>
                                    <th>Harga</th>
                                    <th width="120px">Foto Minuman</th>
                                    <th width="100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $sql = mysqli_query($con, "SELECT * FROM minuman ORDER BY idminuman") or die (mysqli_error($con));
                                    while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['namaminuman']; ?></td>
                                    <td>Rp. <?php $harga=$data['harga'];echo number_format($harga,2,",","."); ?></td>
                                    <td>
                                        <img src="<?php echo $url; ?>img/minuman/<?php echo $data['image']; ?>" alt="" width="100" style="height:100px;">
                                    </td>
                                    <td>
                                        <a href="#editminuman<?php echo $data['idminuman']; ?>" class="btn btn-primary notika-btn-primary btn-xs" data-toggle="modal">Edit</a>
                                        <a href="?minuman&id=<?php echo $data['idminuman']; ?>&img=<?php echo $data['image']; ?>" class="btn btn-danger notika-btn-danger btn-xs" data-toggle="modal">Hapus</a>
                                    </td>
                                </tr>  
                                <div class="modal fade" id="editminuman<?php echo $data['idminuman']; ?>" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="margin-bottom:25px;">Edit Minuman</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo $url; ?>proses/editminuman.php" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-example-int">
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" name="idminuman" value="<?php echo $data['idminuman']; ?>" hidden>
                                                                <input type="text" class="form-control" name="nama" value="<?php echo $data['namaminuman']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="number" class="form-control" name="harga" value="<?php echo $data['harga']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <img src="img/minuman/<?php echo $data['image']; ?>" alt="" width="70" style="height:80px;">
                                                                <input type="hidden" class="form-control" name="image_v" value="<?php echo $data['image']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="file" class="form-control" name="image">
                                                            </div>
                                                                <span> Type gambar (jpg,jpeg,png,bmp) dan ukuran max 1 MB.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-default" name="edit">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
<?php
    if (isset($_GET['id'])!="") {
        $id = $_GET['id'];
        $img = $_GET['img'];
        $imgdfolder = "img/minuman/".$img;
        
        unlink($imgdfolder);
        $query = mysqli_query($con, "DELETE FROM minuman WHERE idminuman='$id'")or die(mysqli_error($con));
        if ($query) {
            $msg = "Data berhasil dihapus";
            $_SESSION['msg']=$msg;
            ?><script>window.location.href="?minuman&msg=success"</script><?php
        }else{
            $msg = "Data gagal dihapus";
            $_SESSION['msg']=$msg;
        }
    }
?>