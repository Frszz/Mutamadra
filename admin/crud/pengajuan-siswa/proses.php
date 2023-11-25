<?php
    require_once "../../../config/config.php";
    if(isset($_SESSION['emailAdmin'])) {
        if(isset($_POST['simpan'])){
            // id siswa
            $nisn = $_POST['nisn'];
            $querySiswa = mysqli_query($con, "SELECT id FROM siswa WHERE nisn = '$nisn'");
            $dataIdSiswa = mysqli_fetch_array($querySiswa);
            $IdSiswa = $dataIdSiswa['id'];
            // id siswa

            // id sekolah
            $tujuan_sekolah = $_POST['tujuan_sekolah'];
            $queryIdSklh = mysqli_query($con,"SELECT id FROM sekolah WHERE nama_sekolah = '$tujuan_sekolah'");
            $dataIdSklh = mysqli_fetch_array($queryIdSklh);
            $IdSklh = $dataIdSklh['id'];
            // id sekolah

            $id = $_POST['id'];
            $status = $_POST['status'];
            $queryFile = mysqli_query($con, "SELECT * FROM daftar_siswa WHERE id = '$id'");
            $dataFile = mysqli_fetch_array($queryFile);
            $dirFoto = "../../../siswa/assets/file/Pasfoto/";
            $dirSurat = "../../../siswa/assets/file/Surat_Daftar/";
            if($status == "Diterima"){
                unlink($dirFoto.$dataFile['pas_foto']);
                unlink($dirSurat.$dataFile['surat_daftar']);
                mysqli_query($con, "UPDATE siswa SET id_sekolah='$IdSklh' WHERE id = '$IdSiswa'");
                mysqli_query($con, "DELETE FROM daftar_siswa WHERE id_siswa = '$IdSiswa'");
                echo "<script>alert('Siswa Berhasil Diterima');
                window.location='../../daftar.php';
                </script>";
            } else if($status == "Ditolak"){
                unlink($dirFoto.$dataFile['pas_foto']);
                unlink($dirSurat.$dataFile['surat_daftar']);
                mysqli_query($con, "DELETE FROM daftar_siswa WHERE id_siswa = '$IdSiswa'");
                echo "<script>alert('Siswa Telah Ditolak');
                window.location='../../daftar.php';
                </script>";
            } else{
                echo "<script>alert('Status Harus Diubah');</script>";
            }
        }
    } else{
        echo "<script>window.location='../../../auth/Login-admin/login.php';</script>";
    }
?>