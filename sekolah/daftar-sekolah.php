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
            <li><a href="daftar-sekolah.php" class="active">Daftar</a></li>
        </ul>

      <!-- Navbar Right -->
        <div class="main">
            <a href="akun.php" class="user"><i class="ri-user-fill"></i>Akun</a>
            <a href="../auth/login-user.php" class="user">Logout</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>

    <!-- From Daftar Siswa -->
    <div class="container">
        <h3>Daftar (Sekolah)</h3>

        <a href="daftar-siswa.php" class="next">
            <span class="btnText">Siswa</span>
        </a>
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Data Sekolah</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Sekolah</label>
                            <input type="text" placeholder="Masukkan nama" required>
                        </div>

                        <div class="input-field">
                            <label>NPSN</label>
                            <input type="number" placeholder="Masukkan npsn" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Masukkan email" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Telepon</label>
                            <input type="number" placeholder="Masukkan nomor telepon" required>
                        </div>

                        <div class="input-field">
                            <label>Jenjang</label>
                            <select required>
                                <option disabled selected>Pilih</option>
                                <option>SMA</option>
                                <option>MTS</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Alamat</label>
                            <input type="text" placeholder="Masukkan alamat" required>
                        </div>

                        <div class="input-field">
                            <label>Kecamatan</label>
                            <input type="text" placeholder="Masukkan kecamatan" required>
                        </div>

                        <div class="input-field">
                            <label>Kabupaten/Kota</label>
                            <input type="text" placeholder="Masukkan kabupaten/kota" required>
                        </div>
                        
                        <div class="input-field">
                            <label for="file">Surat Sekolah</label>
                            <input type="file" id="file" name="file">
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Data Pendaftaran</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="file">Surat Izin Pendaftaran</label>
                            <input type="file" id="file" name="file">
                        </div>

                        <div class="input-field">
                            <label>Tanggal Batas Pendaftaran</label>
                            <input type="date" placeholder="Masukan tanggal daftar" required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Batas Mutasi</label>
                            <input type="date" placeholder="Masukan tanggal mutasi" required>
                        </div>

                    </div>

                    <button class="sumbit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
        </form>
    </div>

    <!-- Script -->
    <script type="text/javascript" src="assets/js/script.js"></script>

    <!-- Form -->
    <script type="text/javascript" src="assets/js/form.js"></script>

</body>
</html>