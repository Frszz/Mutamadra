<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['emailAdmin'])) {
        $querySurat = mysqli_query($con, "SELECT * FROM sekolah WHERE id = '$_GET[id]'") or die (mysqli_error($con));
        $result = mysqli_fetch_array($querySurat);
        unlink("../../assets/file/".$result['surat_sekolah']);
        mysqli_query($con, "DELETE FROM sekolah WHERE id = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>
        alert('Data Berhasil Dihapus');
        window.location='../../sekolah.php';
        </script>";
    } else{
        echo "<script>window.location='../../../auth/Login-admin/login.php';</script>";
    }
?>