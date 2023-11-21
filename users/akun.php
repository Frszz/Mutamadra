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
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#sekolah">Formulir Sekolah</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Password Lama</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password Baru</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="siswa">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Data Pribadi</h6>
                                <div class="form-group">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select class="custom-select">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Data Sekolah</h6>
                                <div class="form-group">
                                    <label class="form-label">NISN</label>
                                    <input type="number" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="file">Surat Daftar</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="foto">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama Sekolah</label>
                                    <input type="text" class="form-control" value>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenjang</label>
                                    <select class="custom-select">
                                        <option>SMA</option>
                                        <option>MTS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Daftar</label>
                                    <input type="date" class="form-control" value>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sekolah">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Data Sekolah</h6>
                                <div class="form-group">
                                    <label class="form-label">Nama Sekolah</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">NPSN</label>
                                    <input type="number" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenjang</label>
                                    <select class="custom-select">
                                        <option>SMA</option>
                                        <option>MTS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kabupaten/Kota</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="file">Surat Sekolah</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Data Sekolah</h6>
                                <div class="form-group">
                                    <label class="form-label" for="file">Surat Izin Pendaftaran</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Batas Pendaftaran</label>
                                    <input type="date" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Batas Mutasi</label>
                                    <input type="date" class="form-control" value>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
            <a href="home.php" type="button" class="btn btn-default">Back</a>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>