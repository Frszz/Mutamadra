<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['emailAdmin'])) {
        mysqli_query($con, "DELETE FROM daftar_siswa WHERE id = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>window.location='../../daftar.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/Login-admin/login.php';</script>";
    }
?>