<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <title>Login | Mutamadra</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Reset Password -->
        <div class="form-container reset">
            <form>
                <h1>Login Sekolah</h1>
                <!-- Icons -->
                <div class="social-icons">
                </div>
                <!-- Button -->
                <div class="enter">
                    <a href="Login-Sekolah/login.php" type="button">Sekolah</a>
                </div> 
            </form>
        </div>
        <!-- Login -->
        <div class="form-container login">
            <form>
                <h1>Login Siswa</h1>
                <!-- Icons -->
                <div class="social-icons">
                </div>
                <!-- Button -->
                <div class="enter">
                    <a href="Login-Siswa/login.php" type="button">Siswa</a>
                </div>
            </form>
        </div>
        <!-- Toggle -->
        <div class="toggle-container">
            <div class="toggle">
            `   <!-- Reset Password -->
                <div class="toggle-panel toggle-left">
                    <h1>E - MUTAMADRA</h1>
                    <p>Masuk Sebagai Akun Siswa</p>
                    <button class="hidden" id="login">Login Siswa</button>
                </div>
                <!-- Login -->
                <div class="toggle-panel toggle-right">
                    <img src="../../admin/assets/images/logo.png" class="image" alt="" />
                    <br>
                    <h1>E - MUTAMADRA</h1>
                    <p>Masuk Sebagai Akun Sekolah</p>
                    <button class="hidden" id="reset">Login Sekolah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="assets/script.js"></script>
</body>

</html>