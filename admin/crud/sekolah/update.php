<?php
    require_once "../../../config/config.php";
    if(isset($_SESSION['emailAdmin'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Data Sekolah | Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <!-- Bootstrap Css -->
    <link href="../../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  </head>

  <body data-topbar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="dashboard.php" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="../../assets/images/logo.png" alt="logo-sm-dark" height="30" />
                </span>
                <span class="logo-lg"
                  ><h2 style="margin-top: 1rem"><img src="../../assets/images/logo.png" alt="logo-sm-dark" height="30" /> SEKOLAH</h2>
                </span>
              </a>

              <a href="dashboard.php" class="logo logo-light">
                <span class="logo-sm">
                  <img src="../../assets/images/logo.png" alt="logo-sm-light" height="30" />
                </span>
                <span class="logo-lg">
                  <h2 style="margin-top: 1rem; color: white"><img src="../../assets/images/logo.png" alt="logo-sm-light" height="30" /> SEKOLAH</h2>
                </span>
              </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
              <i class="ri-menu-2-line align-middle"></i>
            </button>
          </div>

          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none">
              <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="top-icon">
                  <i class="ri-search-line"></i>
                </div>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                <form class="p-3">
                  <div class="m-0">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search ..." />
                      <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end -->

            <div class="dropdown d-none d-lg-inline-block">
              <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <div class="top-icon">
                  <i class="mdi mdi-fullscreen"></i>
                </div>
              </button>
            </div>
            <!-- end  -->

            <!-- end notification -->

            <div class="dropdown d-inline-block user-dropdown">
              <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="../../assets/images/users/person.png" alt="Header Avatar" />
                <span class="d-none d-xl-inline-block ms-1">Mutamadra</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../auth/Login-admin/logout.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
              </div>
            </div>
            <!-- end user -->

            <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                <div class="top-icon">
                  <i class="mdi mdi-cog-outline mdi-spin"></i>
                </div>
              </button>
            </div>
            <!-- end setting -->
          </div>
        </div>
      </header>

      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                <a href="../../dashboard.php" class="waves-effect">
                  <i class="ri-dashboard-line"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-inbox-archive-fill"></i>
                  <span>Pengajuan</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="../../daftar_siswa.php">Pengajuan Siswa</a></li>
                  <li><a href="../../daftar_sekolah.php">Pengajuan Pendaftaran</a></li>
                </ul>
              </li>
              <!-- end li -->
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-grid-fill"></i>
                  <span>Master</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="../../siswa.php">Data Siswa</a></li>
                  <li><a href="../../sekolah.php">Data Sekolah</a></li>
                </ul>
              </li>
              <!-- end li -->
            </ul>
            <!-- end ul -->
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- Start right Content here -->
        <script>
          function tampilkanSurat(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('previewSurat');
                output.style.display = 'block';
                output.src = reader.result;

                // Sembunyikan Surat Lama
                var oldSurat = document.getElementById('oldSurat');
                oldSurat.style.display = 'none';
            };
            reader.readAsDataURL(input.files[0]);
          }
        </script>
        <div class="main-content">
            <?php
                $id = @$_GET['id'];
                $sql_sekolah = mysqli_query($con, "SELECT * FROM sekolah WHERE id = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_sekolah);
            ?>
            <form method="POST" action="proses.php" enctype="multipart/form-data">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Edit Data Sekolah</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data Sekolah</a></li>
                                            <li class="breadcrumb-item active">Edit Data</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <input type="hidden" name="id" value="<?=$data['id']?>">
                                        <div class="row mb-3">
                                            <label for="npsn" class="col-sm-2 col-form-label">NPSN</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="npsn" type="text" value="<?=$data['npsn']?>" id="npsn">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="nama_sekolah" type="text" value="<?=$data['nama_sekolah']?>" id="nama_sekolah">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="alamat" type="text" value="<?=$data['alamat']?>" id="alamat">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="kab_kota" class="col-sm-2 col-form-label">Kabupatan/Kota</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="kab_kota" type="text" value="<?=$data['kab_kota']?>" id="kab_kota">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="kecamatan" type="text" value="<?=$data['kecamatan']?>" id="kecamatan">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Jenjang</label>
                                            <div class="col-sm-10">
                                            <?php
                                                echo "<select class=\"form-select\" id=\"jenjang\" name=\"jenjang\">
                                                    <option value=\"\" disabled selected style=\"display:none;\">Pilih Jenjang</option>";
                                                    $category = mysqli_query($con, "SHOW COLUMNS FROM `sekolah` WHERE `field` = 'jenjang'");
                                                    while($result = mysqli_fetch_row($category)){
                                                        foreach(explode("','",substr($result[1],6,-2)) as $option){
                                                          $selected = ($option === $data['jenjang']) ? 'selected' : '';
                                                          echo "<option $selected>$option</option>";
                                                        }
                                                    }
                                                echo "</select>";
                                            ?>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                          <label for="surat_sekolah" class="col-sm-2 col-form-label">Surat Sekolah</label>
                                          <div class="col-sm-10">
                                            <embed id="previewSurat" type="application/pdf" style="display: none; width :auto; height: auto;">
                                            <embed id="oldSurat" src="../../assets/file/<?=$data['surat_sekolah']?>" type="application/pdf" width="auto" height="auto" alt="Surat Sekolah">
                                            <input class="form-control" name="surat_sekolah" type="file" id="surat_sekolah" value="<?=$data['surat_sekolah']?>" accept=".pdf" onchange="tampilkanSurat(event)">
                                          </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="email_sekolah" class="col-sm-2 col-form-label">Email Sekolah</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="email_sekolah" type="email" value="<?=$data['email_sekolah']?>" id="email_sekolah">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="mb-3 row mt-5">
                                        <div class="col">
                                            <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                                            <a href="../../sekolah.php" type="button" class="btn btn-danger"><i class="ri-reply-fill"></i> Kembali</a>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end row -->
                </div>
            </form>
            <!-- end row -->
        </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">
          <h5 class="m-0 me-2">Settings</h5>

          <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
            <i class="mdi mdi-close noti-icon"></i>
          </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
          <div class="mb-2">
            <img src="../../assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1" />
          </div>

          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
          </div>

          <div class="mb-2">
            <img src="../../assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2" />
          </div>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="../../assets/css/bootstrap-dark.min.css" data-appStyle="../../assets/css/app-dark.min.css" />
            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
          </div>

          <div class="mb-2">
            <img src="../../assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3" />
          </div>
          <div class="form-check form-switch mb-5">
            <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="../../assets/css/app-rtl.min.css" />
            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
          </div>
        </div>
      </div>
      <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="../../assets/libs/jquery/jquery.min.js"></script>
    <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../../assets/libs/node-waves/waves.min.js"></script>

    <!-- bs custom file input plugin -->
    <script src="../../assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script src="../../assets/js/pages/form-element.init.js"></script>

    <script src="../../assets/js/app.js"></script>
  </body>
</html>
<?php
    } else{
        echo "<script>window.location='../../../auth/Login-admin/login.php';</script>";
    }
?>