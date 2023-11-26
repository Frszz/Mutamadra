<?php
    require_once "../../config/config.php";
    if(isset($_SESSION['emailAdmin'])) {
        echo "<script>window.location='../../admin/dashboard.php';</script>";
    } else {
?>
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
            <?php
                if(isset($_POST['ubah'])){
                    $email_admin = $_POST['email_admin'];
                    $newPass = $_POST['newPass'];
                    $confirmPass = $_POST['confirmPass'];
                    $queryShow = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email_admin'");
                    $show = mysqli_fetch_assoc($queryShow);
                    if(!empty($email_admin) && !empty($newPass) && !empty($confirmPass)){
                        if($newPass == $confirmPass){
                            mysqli_query($con, "UPDATE admin SET password = '$newPass' WHERE email = '$email_admin'");
                            echo "<script>alert('Password Anda Berhasil Dirubah');
                            window.location='login.php';
                            </script>";
                        } else{
                            echo "<script>alert('Password Tidak Sesuai');
                            window.location='login.php';
                            </script>";
                        }
                    } else{
                        echo "<script>alert('Email Harus Diisi');
                        window.location='login.php';
                        </script>";
                    }
                }
            ?>
            <form method="POST" action="">
                <h1>Reset Password</h1>
                <!-- Icons -->
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-solid fa-school"></i></a>
                </div>
                <!-- Form -->
                <span>Masukkan Email Untuk Verifikasi</span>
                <div class="log">
                    <input type="email" name="email_admin" placeholder="Email" required>
                    <input type="password" name="newPass" placeholder="Password Baru" required>
                    <input type="password" name="confirmPass" placeholder="Konfirmasi Password" required>
                </div>
                <!-- Button -->
                <div class="enter">
                    <input type="submit" name="ubah" value="SUBMIT" style="cursor: pointer;">
                </div> 
            </form>
        </div>

        <!-- Login -->
        <div class="form-container login">
            <form method="POST" action="">
                <h1>Halaman Login</h1>
                <!-- Icons -->
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#" class="icon"><i class="fa-solid fa-school"></i></a>
                </div>
                <!-- Form -->
                <span>Masuk Menggunakan Email Admin </span>
                <div class="log">
                    <input type="email" name="emailAdmin" placeholder="Email">
                    <input type="password" name="passwordAdmin" placeholder="Password">
                </div>
                
                <?php
                    if(isset($_POST['loginAdmin'])) {
                        $email = trim(mysqli_real_escape_string($con, $_POST['emailAdmin']));
                        $pass = trim(mysqli_real_escape_string($con, $_POST['passwordAdmin']));
                        $sql_login = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_login) > 0){
                            $_SESSION['emailAdmin'] = $email;
                            echo "<script>window.location='../../admin/dashboard.php';</script>";
                        } else{ ?>
                            <div class="login-rejected" id="login-rejected">
                                <p class="failed-2">Email / Password salah</p> 
                            </div>
                        <?php
                        }
                    }
                ?>
                <!-- Button -->
                <div class="enter">
                    <input type="submit" name="loginAdmin" value="LOGIN">
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
    <script>
        function closeDiv() {
            document.getElementById("login-rejected").style.display = "none";
        }
        const password = document.getElementById('Password');
        const unhideButton = document.getElementById('unhide');
        unhideButton.addEventListener('click', function(){
            if(password.type === 'password'){
                password.type = 'text';
            } else{
                password.type = 'password';
            }
        });
    </script>
</body>

</html>
<?php
    }
?>
