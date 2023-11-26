<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['emailAdmin'])) {
        $querySurat = mysqli_query($con, "SELECT * FROM daftar_sekolah WHERE id = '$_GET[id]'") or die (mysqli_error($con));
        $result = mysqli_fetch_array($querySurat);
        unlink("../../../sekolah/assets/file/".$result['surat_registrasi']);
        mysqli_query($con, "DELETE FROM daftar_sekolah WHERE id = '$_GET[id]'") or die (mysqli_error($con));
        echo "<script>
        alert('Data Berhasil Dihapus');
        window.location='../../daftar_sekolah.php';
        </script>";
    } else{
        echo "<script>window.location='../../../auth/Login-admin/login.php';</script>";
    }
?>