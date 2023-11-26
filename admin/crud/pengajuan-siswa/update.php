<?php
    require_once "../../../config/config.php";
    if(isset($_SESSION['emailAdmin'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Pengajuan Siswa | Sekolah</title>
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
        <div class="main-content">
          <?php
              $id = @$_GET['id'];
              $sql_ajuan_siswa = mysqli_query($con, "SELECT * FROM daftar_siswa WHERE id = '$id'") or die (mysqli_error($con));
              $data = mysqli_fetch_array($sql_ajuan_siswa);
          ?>
          <form method="POST" action="proses.php" enctype="multipart/form-data">
            <div class="page-content">
              <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Edit Pengajuan Siswa</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pengajuan Siswa</a></li>
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
                                    <label for="pas_foto" class="col-sm-2 col-form-label">Pasfoto</label>
                                    <div class="col-sm-10">
                                      <img id="oldFoto" src="../../../siswa/assets/file/Pasfoto/<?=$data['pas_foto']?>"  width="150" height="200" alt="Foto">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="<?=$data['nisn']?>" id="nisn" name="nisn" readonly>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="nama_pendaftar" class="col-sm-2 col-form-label">Nama Pendaftar</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="<?=$data['nama_pendaftar']?>" name="nama_pendaftar" id="nama_pendaftar" readonly>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="email_pendaftar" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="<?=$data['email_pendaftar']?>" id="email_pendaftar" name="email_pendaftar" readonly>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="nohp_pendaftar" class="col-sm-2 col-form-label">No. Hp</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="<?=$data['nohp_pendaftar']?>" id="nohp_pendaftar" name="nohp_pendaftar" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="text" value="<?=$data['tujuan']?>" id="tujuan" name="tujuan" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="asal_sekolah" class="col-sm-2 col-form-label">Sekolah Asal</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="text" value="<?=$data['asal_sekolah']?>" id="asal_sekolah" name="asal_sekolah" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tujuan_sekolah" class="col-sm-2 col-form-label">Sekolah Tujuan</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="text" value="<?=$data['tujuan_sekolah']?>" id="tujuan_sekolah" name="tujuan_sekolah" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="surat_daftar" class="col-sm-2 col-form-label">Surat Pendaftaran</label>
                                    <div class="col-sm-10">
                                      <embed src="../../../siswa/assets/file/Surat_Daftar/<?=$data['surat_daftar']?>" type="application/pdf" width="100" height="100" alt="Surat Pendaftaran Siswa" /><br><a href="../../../siswa/assets/file/Surat_Daftar/<?=$data['surat_daftar']?>" type="application/pdf" target="_blank">Download Surat</a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgl_daftar" class="col-sm-2 col-form-label">Tanggal Daftar</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="text" value="<?=$data['tgl_daftar']?>" id="tgl_daftar" name="tgl_daftar" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="penentu" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                      <?php
                                          echo "<select class=\"form-select\" id=\"penentu\" name=\"status\">
                                              <option value=\"\" disabled selected style=\"display:none;\">Pilih</option>";
                                              $queryStatus = mysqli_query($con, "SHOW COLUMNS FROM `daftar_siswa` WHERE `field` = 'status'");
                                              while($result = mysqli_fetch_row($queryStatus)){
                                                  foreach(explode("','",substr($result[1],6,-2)) as $option){
                                                    $selected = ($option === $data['status']) ? 'selected' : '';
                                                    echo "<option $selected>$option</option>";
                                                  }
                                              }
                                          echo "</select>";
                                      ?>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="mb-3 row mt-5">
                                <div class="col">
                                    <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                                    <a href="../../daftar.php" type="button" class="btn btn-danger"><i class="ri-reply-fill"></i> Kembali</a>
                                </div>
                                </div>
                            </div>
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