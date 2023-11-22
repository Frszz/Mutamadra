<?php
  require_once "../../config/config.php";
  if(isset($_SESSION['npsnSekolah'])) {
      echo "<script>window.location='../../sekolah/home.php';</script>";
  } else {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css" />

    <title>Login | Sekolah</title>
  </head>
  <body>
    <div class="container">

      <!-- Form -->
        <div class="forms-container">
          <div class="signin-signup">
          <?php
            if(isset($_POST['loginSekolah'])) {
              $npsn = trim(mysqli_real_escape_string($con, $_POST['npsn']));
              $pass = trim(mysqli_real_escape_string($con, $_POST['password']));
              $sql_login = mysqli_query($con, "SELECT * FROM sekolah WHERE npsn = '$npsn' AND password_sekolah = '$pass'") or die (mysqli_error($con));
              if(mysqli_num_rows($sql_login) > 0){
                  $_SESSION['npsnSekolah'] = $npsn;
                  echo "<script>window.location='../../sekolah/home.php';</script>";
              } else{ ?>
                  <div class="login-rejected" id="login-rejected">
                      <button onclick="closeDiv()">X</button>
                      <p class="failed-1"><strong>Login Gagal</strong></p>
                      <p class="failed-2">Email / Password salah</p>
                  </div>
              <?php
              }
            }
          ?>
            <!-- Sign in -->
            <form method="POST" action="" class="sign-in-form">
              <h2 class="title">Masuk</h2>
              <div class="input-field">
                <i class="ri-user-3-fill"></i>
                <input type="text" name="npsn" placeholder="NPSN" required  />
              </div>
              <div class="input-field">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password" required  />
              </div>
              <p><a href="../Password-user/password-sekolah.php"> Lupa Password ?</a></p>
              <div class="bungkus">
                <a href="../login-user.php" class="btn solid back">Kembali</a>
                <input type="submit" name="loginSekolah" value="Login" class="btn solid" />
              </div>

              <!-- Bottom Icon -->
              <p class="social-text">Kunjungi Sosial Media Kami</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="ri-facebook-fill"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="ri-twitter-fill"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="ri-instagram-fill"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="ri-whatsapp-fill"></i>
                </a>
              </div>
            </form>
            
          <?php
            if(isset($_POST['regisSekolah'])){
              $npsn = trim(mysqli_real_escape_string($con, $_POST['npsn']));
              $email = trim(mysqli_real_escape_string($con, $_POST['email']));
              $pass = trim(mysqli_real_escape_string($con, $_POST['password']));
              mysqli_query($con, "INSERT INTO sekolah (id, npsn, email_sekolah, password_sekolah) VALUES ('', '$npsn', '$email', '$pass')") or die (mysqli_error($con));
              echo "<script>alert('Registrasi Berhasil Silahkan Login');
              window.location='login.php';
              </script>";
            }
          ?>
            <!-- Sign up -->
            <form method="POST" action="" class="sign-up-form">
              <h2 class="title">Mendaftar</h2>
              <div class="input-field">
                <i class="ri-user-3-fill"></i>
                <input type="text" name="npsn" placeholder="NPSN" required />
              </div>
              <div class="input-field">
                <i class="ri-mail-fill"></i>
                <input type="email" name="email" placeholder="Email" required />
              </div>
              <div class="input-field">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password" required />
              </div>
              <input type="submit" name="regisSekolah" class="btn" value="Sign up"/>

                <!-- Bottom Icon -->
              <p class="social-text">Kunjungi Sosial Media Kami</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="ri-facebook-fill"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="ri-twitter-fill"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="ri-instagram-fill"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="ri-whatsapp-fill"></i>
                </a>
              </div>
            </form>
          </div>
        </div>

        <!-- Panel -->
        <div class="panels-container">
          <!-- In Login -->
          <div class="panel left-panel">
            <div class="content">
              <h3>Belum Punya Akun?</h3>
              <p>Daftarkan diri anda untuk masuk ke Platform kami</p>
              <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </div>
            <!-- Random img --> 
            <img src="../../admin/assets/images/logo.png" class="image" alt="" />
          </div>
          <!-- In Regis -->
          <div class="panel right-panel">
            <div class="content">
              <h3>Sudah Punya Akun?</h3>
              <p>Kembali dan Masuk untuk mengakses Platform kami</p>
              <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>
            <!-- Random img -->
            <img src="../../admin/assets/images/logo.png" class="image" alt="" />
          </div>
        </div>

    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- Script JS -->
    <script src="assets/app.js"></script>
  </body>
</html>
<?php
  }
?>