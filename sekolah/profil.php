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
      <title>Profil | Mutamadra</title>

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
      <link rel="stylesheet" type="text/css" href="assets/css/style-profil.css">
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
              <li><a href="profil.php" class="active">Profil</a></li>
              <li><a href="daftar-sekolah.php">Daftar</a></li>
          </ul>

        <!-- Navbar Right -->
          <div class="main">
              <a href="akun.php" class="user"><i class="ri-user-fill"></i>Akun</a>
              <a href="../auth/Login-Sekolah/logout.php" class="user">Logout</a>
              <div class="bx bx-menu" id="menu-icon"></div>
          </div>

      </header>

      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Visi</h2>
            <p>Terwujudnya masyarakat agamis, intlektual dan berkualitas menuju masyarakat Kota Medan yang madani, religius dan bermartabat</p>
          </div>
          <div class="col">
            <h2>Misi</h2>
            <p>1.	Meningkatkan penghayatan moral ke dalam spiritual dinamika keagamaan.</p>
            <p>2.	Meningkatkan dan memperkokoh kerukunan antar umat beragama.</p>
            <p>3.	Meningkatkan kualitas pendidikan agama pada madrasah dan sekolah umum.</p>
            <p>4.	Meningkatkan pemberdayaan lembaga keagamaan.</p>
            <p>5.	Meningkatkan kualitas pelayanan haji.</p>
          </div>
        </div>
        <div class="row">
          <h2>Struktur Organisasi</h2>
          <p>Berdasarkan Peraturan Menteri Agama Nomor 19 Tahun 2019 Struktur Kantor Kementerian Agama Kota Medan sebagai Berikut :</p>
          <img src="assets/img/so.png" alt="">
        </div>
      </div>

      <footer>
        <div class="footer-bottom">
            <p>copyright &copy;2023 DIFA. designed by <span>DIFA</span></p>
        </div>
      </footer>

      <!-- Script -->
      <script type="text/javascript" src="assets/js/script.js"></script>

  </body>
</html>
<?php
  } else{
      echo "<script>window.location='../auth/Login-Sekolah/login.php';</script>";
  }
?>