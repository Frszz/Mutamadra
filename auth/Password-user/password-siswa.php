<?php
  require_once "../../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil | Mutamadra</title>
        <!-- css -->
        <link rel="stylesheet" href="assets/css/style-akun.css">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                Reset Password
            </h4>
            <?php
                if(isset($_POST['submit'])){
                    $nisn = $_POST['nisn'];
                    $email = $_POST['email'];
                    $queryShow = mysqli_query($con, "SELECT * FROM siswa WHERE nisn = '$nisn' && email_siswa = '$email'");
                    $show = mysqli_fetch_assoc($queryShow);
                    $pass = $show['password_siswa'];
                    if($show){
                        echo "<script>alert('Password Kamu Adalah = ". $pass . "');
                        window.location='../Login-Siswa/login.php';
                        </script>";
                    } else{
                        echo "<script>alert('NISN atau EMAIL salah!');
                        window.location='../Login-Siswa/login.php';
                        </script>";
                    }
                }
            ?>
            <form method="POST" action="">
                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                        <div class="col-md-3 pt-0">
                            <div class="list-group list-group-flush account-settings-links">
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-change-password">Pengaturan Password</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="account-change-password">
                                    <div class="card-body pb-2">
                                        <div class="form-group">
                                            <label class="form-label">NISN</label>
                                            <input type="text" name="nisn" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>&nbsp;
                    <a href="../Login-Siswa/login.php" type="button" class="btn btn-default">Kembali</a>
                </div>
            </form>
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">

        </script>
    </body>
</html>