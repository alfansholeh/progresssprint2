<?php

// session_start();

// if (!isset($_SESSION["ssLoginPOS"])) {
//     header("location: ../auth/login.php");
//     exit()
// }

require "../config/config.php";
require "../config/functions.php";
// require "../module/mode-produk.php";

$title = "Form Produk - Griess"; 
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= $main_url ?>dahsboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= $main_url ?>produk">Produk</a></li>
                <li class="breadcrumb-item active">Tambah Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-plus fa-sm"></i>Tambah Produk</h3>
                <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i class="fas fa-save"></i>Simpan</button>
                <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i> Reset</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 mb-3 pr-3">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" placeholder="masukkan nama pegawai" autofocus autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center px-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

require "../template/footer.php";

?>