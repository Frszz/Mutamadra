<?php
  require_once "../config/config.php";
  if(isset($_SESSION['npsnSekolah']) && isset($_SESSION['idSekolah'])) {
    $id = $_SESSION['idSekolah'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar | Mutamadra</title>

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
                <li><a href="daftar-sekolah.php" class="active">Daftar</a></li>
            </ul>

            <!-- Navbar Right -->
            <div class="main">
                <a href="akun.php" class="user"><i class="ri-user-fill"></i>Akun</a>
                <a href="../auth/Login-Sekolah/logout.php" class="user">Logout</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <!-- From Daftar Siswa -->
        <div class="container">
            <h3>Daftar (Sekolah)</h3>
            <?php
                if(isset($_POST['kirim'])){
                    $tgl_buka = $_POST['tgl_buka'];
                    $tgl_tutup = $_POST['tgl_tutup'];
                    $dirSurat = "assets/file/";
                    $surat_file = $_FILES['surat_registrasi']['name'];
                    $surat_extension = pathinfo($surat_file, PATHINFO_EXTENSION);
                    if ($surat_extension == 'pdf') {
                        $encrypted_surat = md5(uniqid()).".".$surat_extension;
                        $surat_registrasi = $encrypted_surat;
                        $temp_surat = $_FILES['surat_registrasi']['tmp_name'];
                        move_uploaded_file($temp_surat, $dirSurat . $surat_registrasi);
                    } else{
                        echo "<script>
                        alert('Hanya File PDF Saja');</script>";
                    }

                    mysqli_query($con, "INSERT INTO daftar_sekolah (id_sekolah, surat_registrasi, tgl_buka, tgl_tutup) VALUES ('$id', '$surat_registrasi', '$tgl_buka', '$tgl_tutup')") or die(mysqli_error($con));
                    echo "<script>alert('Pendaftaran Berhasil');
                    window.location='home.php';
                    </script>";
                }
            ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Daftar Sekolah</span>

                        <div class="fields">
                            <div class="input-field">
                                <label for="tgl_buka">Tanggal Buka Pendaftaran</label>
                                <input type="Date" id="tgl_buka" name="tgl_buka" required>
                            </div>

                            <div class="input-field">
                                <label for="tgl_tutup">Tanggal Tutup Pendaftaran</label>
                                <input type="Date" id="tgl_tutup" name="tgl_tutup" required>
                            </div>

                            <div class="input-field">
                                <label for="surat_registrasi">Surat Penerimaan Siswa</label>
                                <input type="file" id="surat_registrasi" name="surat_registrasi" required>
                            </div>

                        </div>
                    </div>

                    <div class="details ID">
                        <button class="sumbit" type="submit" name="kirim">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
                </div>
            </form>
        </div>
        <script>
            var tanggalBukaInput = document.getElementById('tgl_buka');
            var tanggalTutupInput = document.getElementById('tgl_tutup');

            tanggalTutupInput.disabled = true;

            tanggalBukaInput.addEventListener('change', function() {
                tanggalTutupInput.disabled = false;

                var tanggalBuka = new Date(this.value);
                var tanggalTutup = new Date(tanggalTutupInput.value);

                var options = tanggalTutupInput.querySelectorAll('option');
                for (var i = 0; i < options.length; i++) {
                    var optionDate = new Date(options[i].value);
                    if (optionDate <= tanggalBuka) {
                        options[i].disabled = true;
                    } else {
                        options[i].disabled = false;
                    }
                }

                tanggalTutupInput.setAttribute('min', this.value);

                if (tanggalTutup <= tanggalBuka) {
                    tanggalTutupInput.value = this.value;
                }
            });
        </script>

        <!-- Script -->
        <script type="text/javascript" src="assets/js/script.js"></script>

        <!-- Form -->
        <script type="text/javascript" src="assets/js/form.js"></script>

    </body>
</html>
<?php
  } else{
      echo "<script>window.location='../auth/Login-Sekolah/login.php';</script>";
  }
?>