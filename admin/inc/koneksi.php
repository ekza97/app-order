<?php
    $hostname   = "localhost";
    $username   = "nokencod_apsb";
    $password   = "linuxdebian7";
    $db         = "nokencod_cafe";

    $con = mysqli_connect($hostname, $username, $password, $db) or die(mysqli_error($con));
?>