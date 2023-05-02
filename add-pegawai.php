<?php

require "../config/config.php";
// require "../config/functions.php";
require "../module/mode-pegawai.php";

$title = "Tambah Pegawai - Griess";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

if (isset($_POST['simpan'])){
    if (insert($_POST) > 0) {
        echo '<script>
                alert("Pegawai baru berhasil diregistrasi");
            </script>';
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $main_url ?>dahsboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= $main_url ?>pegawai/data-pegawai.php">Pegawai</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Tambah Pegawai</h3>
                    <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right" ><i class="fas fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i> Reset</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="nama_pegawai">Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="masukkan nama pegawai" autofocus autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select type="select" name="jenis_kelamin" class="form-control" id="jenis_kelamin"> 
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_telpon">No. Telp</label>
                                <input type="number" name="no_telepon" class="form-control" id="no_telepon" placeholder="masukkan nomor telepon pegawai" required>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select type="select" name="jabatan" class="form-control" id="jabatan"> 
                                    <option value="">-- Jabatan --</option>
                                    <option value="1">Pemilik</option>
                                    <option value="2">Pegawai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="masukkan email pegawai" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="masukkan password" required>
                            </div>
                            <div class="form-group">
                                <label for="password2">Konfirmasi Password</label>
                                <input type="password" name="password2" class="form-control" id="password2" placeholder="masukkan kembali password" required>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 text-center">
                            <img src="<?= $main_url ?>asset/image/default.png" class="profile-pegawai-img img-circle mb-r" alt="">
                            <input type="file" class="form-control" name="image">
                            <span class="text-sm">Type file gambar JPG | PNG</span><br>
                            <span class="text-dm">Width = Height</span>
                        </div> -->
                    </div>
                </div>
            </form>
        </div>
    </div>


</section>

<?php 

require "../template/footer.php";

?>
