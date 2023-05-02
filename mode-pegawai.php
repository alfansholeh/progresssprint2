<?php

function insert($data){
    global $koneksi;

    $nama_pegawai = strtolower(mysqli_real_escape_string($koneksi, $data ['nama_pegawai']));
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $data ['jenis_kelamin']);
    $no_telepon = mysqli_real_escape_string($koneksi, $data ['no_telepon']);
    $jabatan = mysqli_real_escape_string($koneksi, $data ['jabatan']);
    $email = mysqli_real_escape_string($koneksi, $data ['email']);
    $password = mysqli_real_escape_string($koneksi, $data ['password']);
    $password2 = mysqli_real_escape_string($koneksi, $data ['password2']);
    // $gambar = mysqli_real_escape_string($koneksi, $_FILES ['image']['name']);

    if ($password !== $password2){
        echo '<script>
                alert("Konfirmasi password tidak sesuai, Pegawai baru gagal registrasi");
            </script>';
        return false;
    }

    $pass = password_hash($password, PASSWORD_DEFAULT);
    $cekEmail = mysqli_query($koneksi, "SELECT email FROM pegawai WHERE email = '$email'");
    if(mysqli_num_rows($cekEmail) > 0){
        echo '<script>
                alert("Email sudah ada");
            </script>';
        return false;
    }

    // if($gambar != null){
    //     $gambar = uploadimg();
    // }else{
    //     $gambar = 'default.png';
    // }

    // //gambar tidak sesuai validasi
    // if($gambar == ''){
    //     return false;
    // }

    $sqlPegawai = "INSERT INTO pegawai VALUE (null, '$nama_pegawai', '$jenis_kelamin', '$no_telepon', '$jabatan', '$email', '$pass')";
    mysqli_query($koneksi, $sqlPegawai);

    return mysqli_affected_rows($koneksi);
}

?>