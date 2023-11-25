<?php
    require_once "../../../config/config.php";

    if(isset($_POST['simpan'])){
        $id = $_POST['id'];
        $npsn = $_POST['npsn'];
        $nama_sekolah = $_POST['nama_sekolah'];
        $alamat = $_POST['alamat'];
        $kab_kota = $_POST['kab_kota'];
        $kecamatan = $_POST['kecamatan'];
        $jenjang = $_POST['jenjang'];
        $email_sekolah = $_POST['email_sekolah'];

        $querySurat = mysqli_query($con, "SELECT surat_sekolah FROM sekolah WHERE id = '$id'");
        $row = mysqli_fetch_array($querySurat);
        $existing_file = $row['surat_sekolah'];
        $dir = "../../assets/file/";
        if(isset($_FILES['surat_sekolah']) && $_FILES['surat_sekolah']['error'] === UPLOAD_ERR_OK){
            $surat_file = $_FILES['surat_sekolah']['name'];
            $file_extension = pathinfo($surat_file, PATHINFO_EXTENSION);
            if ($file_extension == 'pdf') {
                $encrypted_name = md5(uniqid()) . '.pdf';
                $surat_sekolah = $encrypted_name;
                $temporary = $_FILES['surat_sekolah']['tmp_name'];
                if($existing_file != $surat_sekolah){
                    $lokasi = $dir . $existing_file;
                    unlink($lokasi);
                } else {
                    $surat_sekolah = $existing_file;
                }
                move_uploaded_file($temporary, $dir . $surat_sekolah);
            } else{
                $surat_sekolah = $existing_file;
                echo "<script>alert('Hanya File PDF Saja');</script>";
            }
        } else{
            $surat_sekolah = $existing_file;
        }
        
        mysqli_query($con, "UPDATE sekolah SET npsn = '$npsn', nama_sekolah = '$nama_sekolah', alamat = '$alamat', kab_kota = '$kab_kota', kecamatan = '$kecamatan', jenjang = '$jenjang', surat_sekolah = '$surat_sekolah', email_sekolah = '$email_sekolah' WHERE id = '$id'") or die (mysqli_error($con));
        echo "<script>
        alert('Data Berhasil Diedit');
        window.location='../../sekolah.php';
        </script>";
    }
?>