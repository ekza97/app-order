
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                <?php include "hal/notifikasi.php"; ?>  
                <a href="#addmeja" class="btn btn-primary" data-toggle="modal">Tambah Meja</a>
                <div class="modal fade" id="addmeja" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 style="margin-bottom:25px;">Tambah Meja</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form action="<?php echo $url; ?>proses/addmeja.php" method="post">
                                <div class="modal-body">    
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Nama Meja" name="namameja" required>
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
                        <h2>Data Meja</h2>
                    </div>
                    <!-- <script type="text/javascript">
                        // window.onload=function(){
                        //     document.getElementById("autoclick").click();
                        // };
                        $(function() {
                                swal("Good job!", "Data", "success")
                            $('#sa-success').on('load', function(){
                                swal("Good job!", "Data", "success")
                            });
                            $.bootstrapGrowl("This is a test.");
                            
                            setTimeout(function() {
                                $.growl("This is another test.", { type: 'success' });
                            }, 1000);
                            
                            setTimeout(function() {
                                $.bootstrapGrowl("Danger, Danger!", {
                                    type: 'danger',
                                    align: 'center',
                                    width: 'auto',
                                    allow_dismiss: false
                                });
                            }, 2000);
                            
                            setTimeout(function() {
                                $.bootstrapGrowl("Danger, Danger!", {
                                    type: 'info',
                                    align: 'left',
                                    stackup_spacing: 30
                                });
                            }, 3000);
                        });
                        $(function(){
                            $.bootstrapGrowl("another message, yay!", {
                            ele: 'body', // which element to append to
                            type: 'info', // (null, 'info', 'danger', 'success')
                            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
                            align: 'right', // ('left', 'right', or 'center')
                            width: 250, // (integer, or 'auto')
                            delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                            allow_dismiss: true, // If true then will display a cross to close the popup.
                            stackup_spacing: 10 // spacing between consecutively stacked growls.
                        });
                    </script> -->
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped table-hover">
                            <thead style="background:#18BC9C;">
                                <tr>
                                    <th width="20px">No</th>
                                    <th>Nama Meja</th>
                                    <th width="100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    $sql = mysqli_query($con, "SELECT * FROM meja ORDER BY idmeja") or die (mysqli_error($con));
                                    while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['namameja']; ?></td>
                                    <td>
                                        <a href="#editmeja<?php echo $data['idmeja']; ?>" class="btn btn-primary notika-btn-primary btn-xs" data-toggle="modal">Edit</a>
                                        <a href="?meja&id=<?php echo $data['idmeja']; ?>" class="btn btn-danger notika-btn-danger btn-xs" data-toggle="modal">Hapus</a>
                                    </td>
                                </tr>  
                                <div class="modal fade" id="editmeja<?php echo $data['idmeja']; ?>" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="margin-bottom:25px;">Edit Meja</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="<?php echo $url; ?>proses/editmeja.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-example-int">
                                                        <div class="form-group">
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" name="idmeja" value="<?php echo $data['idmeja']; ?>" hidden>
                                                                <input type="text" class="form-control" placeholder="Nama Meja" name="namameja" value="<?php echo $data['namameja']; ?>">
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
        
        $query = mysqli_query($con, "DELETE FROM meja WHERE idmeja='$id'")or die(mysqli_error($con));
        if ($query) {
            $msg = "Data berhasil dihapus";
            $_SESSION['msg']=$msg;
            ?><script>window.location.href="?meja&msg=success"</script><?php
        }else{
            $msg = "Data gagal dihapus";
            $_SESSION['msg']=$msg;
        }
    }
?>