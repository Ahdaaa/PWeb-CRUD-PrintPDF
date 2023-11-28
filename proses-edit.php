<?php

    include("config.php");
    $id = $_GET['id'];

    if (isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat'];

            $sql = "UPDATE calon_siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', telp='$notelp', alamat='$alamat' WHERE id=$id";
            $query = mysqli_query($db, $sql);

            if ($query) {
                header('Location: index.php');
            } else {
                die("Gagal menyimpan perubahan...");
            }
    } else {
        die("Akses dilarang..");
    }

?>