<?php
    require_once "../config/config.php";
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
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
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
                  <img src="assets/images/logo.png" alt="logo-sm-dark" height="30" />
                </span>
                <span class="logo-lg"
                  ><h2 style="margin-top: 1rem"><img src="assets/images/logo.png" alt="logo-sm-dark" height="30" /> SEKOLAH</h2>
                </span>
              </a>

              <a href="dashboard.php" class="logo logo-light">
                <span class="logo-sm">
                  <img src="assets/images/logo.png" alt="logo-sm-light" height="30" />
                </span>
                <span class="logo-lg">
                  <h2 style="margin-top: 1rem; color: white"><img src="assets/images/logo.png" alt="logo-sm-light" height="30" /> SEKOLAH</h2>
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
                <img class="rounded-circle header-profile-user" src="assets/images/users/person.png" alt="Header Avatar" />
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
                <a href="dashboard.php" class="waves-effect">
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
                  <li><a href="daftar.php">Pengajuan Siswa</a></li>
                  <li><a href="mutasi.php">Pengajuan Sekolah</a></li>
                </ul>
              </li>
              <!-- end li -->
              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-grid-fill"></i>
                  <span>Master</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="siswa.php">Data Siswa</a></li>
                  <li><a href="sekolah.php">Data Sekolah</a></li>
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
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Data Sekolah</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                      <li class="breadcrumb-item active">Data Sekolah</li>
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

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%">
                      <thead>
                        <tr>
                          <th>NPSN</th>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Kabupaten/Kota</th>
                          <th>Kecamatan</th>
                          <th>Jenjang</th>
                          <th>Surat Sekolah</th>
                          <th>Email</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $query = "SELECT * FROM sekolah";
                          $sql_sekolah = mysqli_query($con, $query) or die (mysqli_error($con));
                          if(mysqli_num_rows($sql_sekolah) > 0){
                              while($data = mysqli_fetch_array($sql_sekolah)){
                        ?>
                                <tr>
                                  <td><?=$data['npsn']?></td>
                                  <td><?=$data['nama_sekolah']?></td>
                                  <td><?=$data['alamat']?></td>
                                  <td><?=$data['kab_kota']?></td>
                                  <td><?=$data['kecamatan']?></td>
                                  <td><?=$data['jenjang']?></td>
                                  <td><embed src="assets/file/<?=$data['surat_sekolah']?>" type="application/pdf" width="100" height="100" alt="Surat Sekolah"><br><a href="assets/file/<?=$data['surat_sekolah']?>" type="application/pdf" target="_blank">Download Surat</a></td>
                                  <td><?=$data['email_sekolah']?></td>
                                  <td>
                                    <a href="crud/sekolah/update.php?id=<?=$data['id']?>" class="btn btn-primary mb-3"><i class="ri-pencil-fill"></i></a>
                                    <a href="crud/sekolah/delete.php?id=<?=$data['id']?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" class="btn btn-danger mb-3"><i class="ri-delete-bin-2-fill"></i></a>
                                  </td>
                                </tr>
                        <?php
                              }
                          } else{
                              echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                © DIFA.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">Crafted with <i class="mdi mdi-fire text-danger"></i> by DIFA</div>
              </div>
            </div>
          </div>
        </footer>
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
            <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1" />
          </div>

          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
          </div>

          <div class="mb-2">
            <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2" />
          </div>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
          </div>

          <div class="mb-2">
            <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3" />
          </div>
          <div class="form-check form-switch mb-5">
            <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
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
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.php5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>
  </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/Login-admin/login.php';</script>";
    }
?>