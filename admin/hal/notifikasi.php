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
	// window.onload=function(){
	// 	// swal({   
	// 	// 	title: "Auto close alert!",   
	// 	// 	text: "I will close in 2 seconds.",   
	// 	// 	timer: 2000
	// 	// });
	// 	setTimeout(function() {
	// 		$.bootstrapGrowl("Berhasil Menambahkan data", {
	// 			type: 'success',
	// 			align: 'right',
	// 			width: 'auto',
	// 			offset: {from: 'top', amount: 100},
	// 		});
	// 	}, 3000);
	// };
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove();
		});
		// swal("Good job!", "Data", "success")
		// swal({   
		// 	title: "Auto close alert!",   
		// 	text: "I will close in 2 seconds.",   
		// 	timer: 2000
		// });
	}, 2000);
</script>