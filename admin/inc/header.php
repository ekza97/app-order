<?php
    $page=$_SERVER['REQUEST_URI'];
    $sec="10";
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rumah Makan Sabar Menanti</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url; ?>assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/normalize.css">
	  <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo $url; ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/notification/notification.css">
    <!-- dialog CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/dialog/dialog.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/datapicker/datepicker3.css">
</head>

<body>
                    <script type="text/javascript">
                        // window.onload=function(){
                        //     document.getElementById("autoclick").click();
                        // };
                        function info(){
                          swal("Good job!", "Data", "success")
                          // $('#sa-success').on('load', function(){
                          //       swal("Good job!", "Data", "success")
                          //   });
                        };
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
                    </script>