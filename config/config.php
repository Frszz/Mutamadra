<?php
    date_default_timezone_set('Asia/Jakarta');
    session_start();

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'dbmutamadra';
    $con = mysqli_connect($host, $user, $pass, $db);

    mysqli_select_db($con, $db);
?>