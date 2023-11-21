<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <title>Login | Sekolah</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Reset Password -->
        <div class="form-container reset">
            <form>
                <h1>Reset Password</h1>
                <!-- Icons -->
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-solid fa-school"></i></a>
                </div>
                <!-- Form -->
                <span>Masukan Nama dan Email Untuk Verifikasi</span>
                <div class="log">
                    <input type="text" placeholder="Nama">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Password Baru">
                    <input type="password" placeholder="Konfirmasi Password">
                </div>
                <!-- Button -->
                <div class="enter">
                    <a href="login.php" type="button">Konfirmasi</a>
                </div> 
            </form>
        </div>
        <!-- Login -->
        <div class="form-container login">
            <form>
                <h1>Halaman Login</h1>
                <!-- Icons -->
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-solid fa-school"></i></a>
                </div>
                <!-- Form -->
                <span>Masuk Menggunakan Email Admin </span>
                <div class="log">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Password">
                </div>
                <!-- Button -->
                <div class="enter">
                    <a href="../../admin/dashboard.php" type="button">Login</a>
                </div>
            </form>
        </div>
        <!-- Toggle -->
        <div class="toggle-container">
            <div class="toggle">
            `   <!-- Reset Password -->
                <div class="toggle-panel toggle-left">
                    <h1>Kelola Password</h1>
                    <p>Lengkapi Formulir untuk Menyetujui Password Baru</p>
                    <button class="hidden" id="login">Halaman Login</button>
                </div>
                <!-- Login -->
                <div class="toggle-panel toggle-right">
                    <img src="../../admin/assets/images/logo.png" class="image" alt="" />
                    <br>
                    <h1>E - MUTAMADRA</h1>
                    <p>Selamat Datang ! <br>
                        Dashboard Manajemen Data Sekolah
                    </p>
                    <button class="hidden" id="reset">Reset Password</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="../assets/script.js"></script>
</body>

</html>