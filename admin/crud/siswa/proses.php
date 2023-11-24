<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['emailAdmin'])) {
        if(isset($_POST['simpan'])){
            $id = $_POST['id'];
            $nisn = $_POST['nisn'];
            $nama_siswa = $_POST['nama_siswa'];
            // id sekolah
            $nama_sklh = $_POST['nama_sekolah'];
            $queryIdSklh = mysqli_query($con,"SELECT id FROM sekolah WHERE nama_sekolah = '$nama_sklh'");
            $dataId = mysqli_fetch_array($queryIdSklh);
            $IdSklh = $dataId['id'];
            // id sekolah
            $tmpt_lahir = $_POST['tmpt_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $no_hp = $_POST['no_hp'];
            $gender = $_POST['gender'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email_siswa'];
            mysqli_query($con, "UPDATE siswa SET id_sekolah='$IdSklh', nisn = '$nisn', nama_siswa = '$nama_siswa', tmpt_lahir = '$tmpt_lahir', tgl_lahir = '$tgl_lahir', no_hp = '$no_hp', gender = '$gender', alamat = '$alamat', email_siswa = '$email' WHERE id = '$id'") or die (mysqli_error($con));
            echo "<script>
            alert('Data Berhasil Diedit');
            window.location='../../siswa.php';
            </script>";
        }
    }
?>