<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mutamadra</title>

    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- boxicon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script:wght@700&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Nosifer&family=Playpen+Sans&family=Poppins:wght@300;600&family=Young+Serif&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    
    <header>
      <!-- Navbar Left -->
        <a href="home.php" class="logo">
            <i class="ri-home-7-fill"></i><span>Mutamadra</span>
        </a>

      <!-- Navbar Center -->
        <ul class="navbar">
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="daftar-siswa.php">Daftar</a></li>
            <li><a href="mutasi-siswa.php">Mutasi</a></li>
        </ul>

      <!-- Navbar Right -->
        <div class="main">
            <a href="akun.php" class="user"><i class="ri-user-fill"></i>Akun</a>
            <a href="../auth/login-user.php" class="user">Logout</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>

    <div class="slider">
        <!-- fade css -->
        <div class="myslide fade">
          <div class="txt">
            <h1>Kemenag Mutamadra</h1>
            <p>Menyediakan Layanan untuk siswa dan sekolah <br>dalam pendaftaran, mutasi dan pembukaan pendaftaran sekolah</p>
          </div>
          <img src="assets/img/slider1.jpg" style="width: 100%; height: 100%" />
        </div>
  
        <div class="myslide fade">
          <div class="txt">
            <h1>Moral dan Agama</h1>
            <p>Menjujung tinggi moral hidup dan adab<br />untuk menciptakan generasi yang patuh terhadap agamanya</p>
          </div>
          <img src="assets/img/slider2.jpg" style="width: 100%; height: 100%" />
        </div>
  
        <div class="myslide fade">
          <div class="txt">
            <h1>Prestasi</h1>
            <p>Meningkatkan Kualitas pendidikan<br />agar tercipta generasi pintar dan berprestasi</p>
          </div>
          <img src="assets/img/slider3.jpg" style="width: 100%; height: 100%" />
        </div>
  
        <div class="myslide fade">
          <div class="txt">
            <h1>Belajar dan Mengajar</h1>
            <p>Mempererat hubungan antar sesama<br />baik murid dan guru demi menjaga persatuan yang harmonis</p>
          </div>
          <img src="assets/img/slider4.jpg" style="width: 100%; height: 100%" />
        </div>
  
        <!-- onclick js -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
        <div class="dotsbox" style="text-align: center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>

    </div>

    <script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>