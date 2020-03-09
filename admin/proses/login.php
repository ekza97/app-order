<?php
    include ('../inc/koneksi.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where username='$username' and password='$password'";

		$query = mysqli_query($con,$sql) or die(mysqli_error($con));

		$row = mysqli_num_rows($query);

		$data = mysqli_fetch_row($query);
		if ($row > 0) {
			session_start();
			$_SESSION['id']=$data[0];
			$_SESSION['nama']=$data[1];
			$_SESSION['username']=$username;
			header("location:../");
		}else{
			header("location:../../");
		}
    }

?>