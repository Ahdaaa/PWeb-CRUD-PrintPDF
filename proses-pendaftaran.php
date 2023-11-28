<?php
    include("config.php");

    if (isset($_POST['daftar'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO calon_siswa (nis, nama, jenis_kelamin, telp, alamat) 
            VALUE ('$nis', '$nama', '$jk', '$notelp', '$alamat')";

        $query = mysqli_query($db, $sql);

        if ($query){
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
        
    } else{
        die("Akses dilarang...");
    }
?>