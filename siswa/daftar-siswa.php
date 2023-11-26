<?php
  require_once "../config/config.php";
  if(isset($_SESSION['nisnSiswa'])  && isset($_SESSION['idSiswa'])) {
    $id = $_SESSION['idSiswa'];
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Mutamadra</title>

        <!-- remixicon -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

        <!-- boxicon -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <!-- Iconscout CSS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script:wght@700&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Nosifer&family=Playpen+Sans&family=Poppins:wght@300;600&family=Young+Serif&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/style-form.css">
    </head>
    <body>
        
        <header>
            <!-- Navbar Left -->
            <a href="home.php" class="logo">
                <i class="ri-home-7-fill"></i><span>Mutamadra</span>
            </a>

            <!-- Navbar Center -->
            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="daftar-siswa.php" class="active">Daftar</a></li>
            </ul>

            <!-- Navbar Right -->
            <div class="main">
                <a href="akun.php" class="user"><i class="ri-user-fill"></i>Akun</a>
                <a href="../auth/Login-Siswa/logout.php" class="user">Logout</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <?php
            $queryUtama = mysqli_query($con, "SELECT * FROM daftar_siswa WHERE id_siswa = '$id'");
            $utama = mysqli_fetch_array($queryUtama);
            $date = date('d-m-Y');
            
            if(!isset($utama['id_siswa']) || $utama['id_siswa'] != $id){
                $querySiswa = mysqli_query($con, "SELECT * FROM siswa WHERE id = '$id'");
                $siswa = mysqli_fetch_array($querySiswa);
                $querySekolah = mysqli_query($con, "SELECT * FROM sekolah");
                
                if(!empty($siswa['nama_siswa']) && !empty($siswa['nisn']) && !empty($siswa['email_siswa']) && !empty($siswa['no_hp'])){
        ?>
                    <!-- From Daftar Siswa -->
                    <div class="container">
                        <h3>Daftar (Siswa)</h3>
                        <script>
                            function tampilkanFoto(event) {
                                var input = event.target;
                                var reader = new FileReader();
                                reader.onload = function() {
                                    var output = document.getElementById('previewFoto');
                                    output.style.display = 'block';
                                    output.src = reader.result;
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        </script>
                        <?php
                            if(isset($_POST['kirim'])){
                                $dirFoto = "assets/file/Pasfoto/";
                                $foto_file = $_FILES['pas_foto']['name'];
                                $foto_extension = pathinfo($foto_file, PATHINFO_EXTENSION);
                                if ($foto_extension == 'png' || $foto_extension == 'jpg' || $foto_extension == 'jpeg') {
                                    $encrypted_foto = md5(uniqid()).".".$foto_extension;
                                    $pas_foto = $encrypted_foto;
                                    $temp_foto = $_FILES['pas_foto']['tmp_name'];
                                    move_uploaded_file($temp_foto, $dirFoto . $pas_foto);
                                } else{
                                    echo "<script>
                                    alert('Hanya File Gambar Saja');</script>";
                                }

                                $nisn = $_POST['nisn'];
                                $nama_pendaftar = $_POST['nama_pendaftar'];
                                $email_pendaftar = $_POST['email_pendaftar'];
                                $nohp_pendaftar = $_POST['nohp_pendaftar'];
                                $tujuan = $_POST['tujuan'];
                                $asal_sekolah = $_POST['asal_sekolah'];
                                // id sekolah
                                $tujuan_sekolah = $_POST['tujuan_sekolah'];
                                $queryIdSklh = mysqli_query($con,"SELECT id FROM sekolah WHERE nama_sekolah = '$tujuan_sekolah'");
                                $dataId = mysqli_fetch_array($queryIdSklh);
                                $IdSklh = $dataId['id'];
                                // id sekolah

                                $dirSurat = "assets/file/Surat_Daftar/";
                                $surat_file = $_FILES['surat_daftar']['name'];
                                $surat_extension = pathinfo($surat_file, PATHINFO_EXTENSION);
                                if ($surat_extension == 'pdf') {
                                    $encrypted_surat = md5(uniqid()).".".$surat_extension;
                                    $surat_daftar = $encrypted_surat;
                                    $temp_surat = $_FILES['surat_daftar']['tmp_name'];
                                    move_uploaded_file($temp_surat, $dirSurat . $surat_daftar);
                                } else{
                                    echo "<script>
                                    alert('Hanya File PDF Saja');</script>";
                                }

                                $status = $_POST['status'];

                                mysqli_query($con, "INSERT INTO daftar_siswa (id_siswa, id_sekolah, pas_foto, nisn, nama_pendaftar, email_pendaftar, nohp_pendaftar, tujuan, asal_sekolah, tujuan_sekolah, surat_daftar, tgl_daftar, status) VALUES ('$id', '$IdSklh', '$pas_foto', '$nisn', '$nama_pendaftar', '$email_pendaftar', '$nohp_pendaftar', '$tujuan', '$asal_sekolah', '$tujuan_sekolah', '$surat_daftar', CURRENT_TIMESTAMP(), '$status')") or die(mysqli_error($con));
                                echo "<script>alert('Pendaftaran Berhasil');
                                window.location='home.php';
                                </script>";
                            }
                        ?>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form first">
                                <div class="details personal">
                                    <span class="title">Data Pribadi</span>
                                    <img id="previewFoto" style="display: none; width :88.5px; height: 118px;">
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="pas_foto">Pasfoto 4x3 (.png, .jpg, .jpeg)</label>
                                            <input type="file" id="pas_foto" accept=".png, .jpg, .jpeg" name="pas_foto" onchange="tampilkanFoto(event)" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="nisn">NISN</label>
                                            <input type="text" id="nisn" name="nisn" value="<?=$siswa['nisn']?>" placeholder="Masukkan nisn" required readonly>
                                        </div>

                                        <div class="input-field">
                                            <label for="nama_pendaftar">Nama Lengkap</label>
                                            <input type="text" id="nama_pendaftar" name="nama_pendaftar" value="<?=$siswa['nama_siswa']?>" placeholder="Masukkan nama" required readonly>
                                        </div>

                                        <div class="input-field">
                                            <label for="email_pendaftar">Email</label>
                                            <input type="email" id="email_pendaftar" name="email_pendaftar" value="<?=$siswa['email_siswa']?>" placeholder="Masukkan Email" required readonly>
                                        </div>

                                        <div class="input-field">
                                            <label for="nohp_pendaftar">No. Hp</label>
                                            <input type="text" id="nohp_pendaftar" name="nohp_pendaftar" value="<?=$siswa['no_hp']?>" placeholder="Masukkan No. Hp" required readonly>
                                        </div>

                                        <div class="input-field">
                                            <label for="tujuan">Tujuan</label>
                                            <?php
                                                echo "<select class=\"form-select\" id=\"tujuan\" name=\"tujuan\" required>
                                                    <option value=\"\" disabled selected style=\"display:none;\">Pilih</option>";
                                                    $sql_tujuan = mysqli_query($con, "SHOW COLUMNS FROM `daftar_siswa` WHERE `field` = 'tujuan'");
                                                    while($tujuan = mysqli_fetch_row($sql_tujuan)){
                                                        foreach(explode("','",substr($tujuan[1],6,-2)) as $option){
                                                        echo "<option>$option</option>";
                                                        }
                                                    }
                                                echo "</select>";
                                            ?>
                                        </div>

                                        <div class="input-field">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                            <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Nama Asal Sekolah" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="tujuan_sekolah">Tujuan Sekolah</label>
                                            <select class="form-select" id="tujuan_sekolah" name="tujuan_sekolah" required>
                                                <option disabled selected style="display: none;">Pilih</option>
                                            <?php
                                                $date = date('Y-m-d');
                                                $queryDaftar = mysqli_query($con, "SELECT * FROM daftar_sekolah INNER JOIN sekolah ON daftar_sekolah.id_sekolah = sekolah.id");
                                                while ($hasil = mysqli_fetch_array($queryDaftar)) {
                                                    $tutup = $hasil['tgl_tutup'];
                                                    if ($date <= $tutup) {
                                            ?>
                                                        <option><?=$hasil['nama_sekolah']?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                            </select>
                                        </div>


                                        <div class="input-field">
                                            <label for="surat_daftar">Surat Daftar (.pdf)</label>
                                            <input type="file" id="surat_daftar" name="surat_daftar" accept=".pdf" required>
                                        </div>

                                        <input type="hidden" name="status" value="Diproses">

                                        <input type="submit" class="submit" name="kirim" value="Kirim">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
        <?php   
                } else{
        ?>
                    <div class="not-complited">
                        <p>Lengkapi Terlebih Dahulu <a href="akun.php">Biodata</a> Kamu</p>
                    </div>
        <?php
                }
            } else{
        ?>
                <!-- Tabel Riwayat Pendaftaran -->
                <table id="riwayat">
                    <thead>
                        <tr>
                            <th>Pasfoto</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Hp</th>
                            <th>Hal</th>
                            <th>sekolah Asal</th>
                            <th>Sekolah Tujuan</th>
                            <th>Surat Daftar</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query_riwayat = "SELECT * FROM daftar_siswa WHERE id_siswa = '$id'";
                            $sql_riwayat = mysqli_query($con, $query_riwayat) or die (mysqli_error($con));
                            if(mysqli_num_rows($sql_riwayat) > 0){
                                while($riwayat = mysqli_fetch_array($sql_riwayat)){
                        ?>
                                    <tr>
                                        <td><img src="assets/file/Pasfoto/<?=$riwayat['pas_foto']?>" width="100" height="100" alt="Pasfoto"></td>
                                        <td><?=$riwayat['nisn']?></td>
                                        <td><?=$riwayat['nama_pendaftar']?></td>
                                        <td><?=$riwayat['email_pendaftar']?></td>
                                        <td><?=$riwayat['nohp_pendaftar']?></td>
                                        <td><?=$riwayat['tujuan']?></td>
                                        <td><?=$riwayat['asal_sekolah']?></td>
                                        <td><?=$riwayat['tujuan_sekolah']?></td>
                                        <td><embed src="assets/file/Surat_Daftar/<?=$riwayat['surat_daftar']?>" width="100" height="100" alt="Surat Daftar"><br><a href="assets/file/Surat_Daftar/<?=$riwayat['surat_daftar']?>" type="application/pdf" target="_blank">Download Surat</a></td>
                                        <td><?=$riwayat['tgl_daftar']?></td>
                                        <td><?=$riwayat['status']?></td>
                                    </tr>
                        <?php
                                }
                            } else{
                                echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
        <?php
            }
        ?>
        

        <!-- Script -->
        <script type="text/javascript" src="assets/js/script.js"></script>

        <!-- Form -->
        <script type="text/javascript" src="assets/js/form.js"></script>

    </body>
</html>
<?php
  } else{
      echo "<script>window.location='../auth/Login-Siswa/login.php';</script>";
  }
?>