<?php
  require_once "../config/config.php";
  if(isset($_SESSION['nisnSiswa']) && isset($_SESSION['idSiswa'])) {
    $id = $_SESSION['idSiswa'];
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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
    <body>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                Profil Akun
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">Ubah Password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#siswa">Formulir Siswa</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <?php
                                if(isset($_POST['ubahpass'])){
                                    $oldPass = $_POST['oldPass'];
                                    $newPass = $_POST['newPass'];
                                    $confirmPass = $_POST['confirmPass'];

                                    $queryPass = mysqli_query($con, "SELECT password_siswa FROM siswa WHERE id = '$id'");
                                    $resultPass = mysqli_fetch_array($queryPass);

                                    if($oldPass == $resultPass['password_siswa']){
                                        if($newPass == $confirmPass){
                                            mysqli_query($con, "UPDATE siswa SET password_siswa = '$newPass' WHERE id = '$id'") or die (mysqli_error($con));
                                            echo "<script>
                                            alert('Password Berhasil Diubah');
                                            window.location='akun.php';
                                            </script>";
                                        } else{
                                            echo "<script>alert('Password Tidak Sesuai');</script>";
                                        }
                                    } else{
                                        echo "<script>alert('Password Salah');</script>";
                                    }
                                }
                            ?>
                            <div class="tab-pane fade" id="account-change-password">
                                <form method="POST" action="" id="change-pass">
                                    <div class="card-body pb-2">
                                        <div class="form-group">
                                            <label class="form-label">Password Lama</label>
                                            <div class="password-input">
                                                <input type="password" name="oldPass" id="oldPass" class="form-control">
                                                <span class="show-hide">
                                                    <i class="fa-solid fa-eye unhide"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password Baru</label>
                                            <div class="password-input">
                                                <input type="password" name="newPass" id="newPass" class="form-control">
                                                <span class="show-hide">
                                                    <i class="fa-solid fa-eye unhide"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <div class="password-input">
                                                <input type="password" name="confirmPass" id="confirmPass" class="form-control">
                                                <span class="show-hide">
                                                    <i class="fa-solid fa-eye unhide"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-right mt-3">
                                            <input type="submit" name="ubahpass" value="Save Changes" class="btn btn-primary">&nbsp;
                                            <a href="home.php" type="button" class="btn btn-default">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <script>
                                const passwordInputs = document.querySelectorAll('.password-input input');
                                const unhideButtons = document.querySelectorAll('.unhide');

                                unhideButtons.forEach((button, index) => {
                                    button.addEventListener('click', function() {
                                        if (passwordInputs[index].type === 'password') {
                                            passwordInputs[index].type = 'text';
                                        } else {
                                            passwordInputs[index].type = 'password';
                                        }
                                    });
                                });
                            </script>

                            </div>
                            <?php
                                $querySiswa = mysqli_query($con, "SELECT * FROM siswa WHERE id = '$id'");
                                $master = mysqli_fetch_array($querySiswa);
                                if(isset($_POST['biodata'])){
                                    $id_siswa = $_POST['id'];
                                    $nisn = $_POST['nisn'];
                                    $nama_siswa = $_POST['nama_siswa'];
                                    $tmpt_lahir = $_POST['tmpt_lahir'];
                                    $tgl_lahir = $_POST['tgl_lahir'];
                                    $no_hp = $_POST['no_hp'];
                                    $gender = $_POST['gender'];
                                    $alamat = $_POST['alamat'];
                                    $email = $_POST['email'];
                                    mysqli_query($con, "UPDATE siswa SET nisn = '$nisn', nama_siswa = '$nama_siswa', tmpt_lahir = '$tmpt_lahir', tgl_lahir = '$tgl_lahir', no_hp = '$no_hp', gender = '$gender', alamat = '$alamat', email_siswa = '$email' WHERE id = '$id_siswa'") or die (mysqli_error($con));
                                    echo "<script>
                                    alert('Data Berhasil Disimpan');
                                    window.location='akun.php';
                                    </script>";
                                }
                            ?>
                            <div class="tab-pane fade" id="siswa">
                                <form method="POST" action="" id="biodata">
                                    <div class="card-body pb-2">
                                        <h6 class="mb-4">Data Pribadi</h6>
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <div class="form-group">
                                            <label class="form-label">NISN</label>
                                            <input type="number" name="nisn" class="form-control" value="<?=$master['nisn']?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_siswa" class="form-control" value="<?=$master['nama_siswa']?>">
                                        </div>
                                        <div class="form-group">
                                            <?php
                                                $querySekolah = mysqli_query($con, "SELECT * FROM sekolah WHERE id = '$master[id_sekolah]'");
                                                if(mysqli_num_rows($querySekolah) > 0) {
                                                    $sekolah = mysqli_fetch_array($querySekolah);
                                                    $namaSekolah = $sekolah['nama_sekolah'];
                                                } else {
                                                    $namaSekolah = "";
                                                }
                                            ?>
                                            <label class="form-label">Nama Sekolah</label>
                                            <input type="text" class="form-control" value="<?=$namaSekolah?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" name="tmpt_lahir" class="form-control" value="<?=$master['tmpt_lahir']?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control" value="<?=$master['tgl_lahir']?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nomor Telepon</label>
                                            <input type="text" name="no_hp" value="<?=$master['no_hp']?>" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <?php
                                                echo "<select class=\"custom-select\" id=\"gender\" name=\"gender\">
                                                    <option value=\"\" disabled selected style=\"display:none;\">Pilih</option>";
                                                    $jk = mysqli_query($con, "SHOW COLUMNS FROM `siswa` WHERE `field` = 'gender'");
                                                    while($result = mysqli_fetch_row($jk)){
                                                        foreach(explode("','",substr($result[1],6,-2)) as $option){
                                                        $selected = ($option === $master['gender']) ? 'selected' : '';
                                                        echo "<option $selected>$option</option>";
                                                        }
                                                    }
                                                echo "</select>";
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" value="<?=$master['alamat']?> ">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="<?=$master['email_siswa']?>" class="form-control" value="">
                                        </div>
                                        <div class="text-right mt-3">
                                            <input type="submit" name="biodata" value="Save Changes" class="btn btn-primary">&nbsp;
                                            <a href="home.php" type="button" class="btn btn-default">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>
    </body>
</html>
<?php
  } else{
      echo "<script>window.location='../auth/Login-Siswa/login.php';</script>";
  }
?>