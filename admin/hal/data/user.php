
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                <?php include "hal/notifikasi.php"; ?>  
                <a href="#adduser" class="btn btn-primary" data-toggle="modal">Tambah User</a>
                <div class="modal fade" id="adduser" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 style="margin-bottom:25px;">Tambah User</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form action="<?php echo $url; ?>proses/adduser.php" method="post">
                                <div class="modal-body">    
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="fullname" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            </div>
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
                        <h2>Data User</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped table-hover">
                            <thead style="background:#18BC9C;">
                                <tr>
                                    <th width="20px">No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th width="100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $sql = mysqli_query($con, "SELECT * FROM users ORDER BY idusers") or die (mysqli_error($con));
                                    while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['fullname']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td>
                                        <a href="#edituser<?php echo $data['idusers']; ?>" class="btn btn-primary notika-btn-primary btn-xs" data-toggle="modal">Edit</a>
                                        <a href="?user&id=<?php echo $data['idusers']; ?>" class="btn btn-danger notika-btn-danger btn-xs" data-toggle="modal">Hapus</a>
                                    </td>
                                </tr>  
                                <div class="modal fade" id="edituser<?php echo $data['idusers']; ?>" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="margin-bottom:25px;">Edit user</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo $url; ?>proses/edituser.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-example-int">
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" name="iduser" value="<?php echo $data['idusers']; ?>" hidden>
                                                                <input type="text" class="form-control" name="fullname" value="<?php echo $data['fullname']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>" required>
                                                            </div>
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
        
        $query = mysqli_query($con, "DELETE FROM users WHERE idusers='$id'")or die(mysqli_error($con));
        if ($query) {
            $msg = "Data berhasil dihapus";
            $_SESSION['msg']=$msg;
            ?><script>window.location.href="?user&msg=success"</script><?php
        }else{
            $msg = "Data gagal dihapus";
            $_SESSION['msg']=$msg;
        }
    }
?>