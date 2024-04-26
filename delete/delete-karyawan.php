<?php
require '../config.php';
$nik = $_GET['nik'];
$query = mysqli_query($mysqli, "DELETE FROM karyawan WHERE NIK='$nik'");
if ($query) {
    ?>
        <script>
            alert("Data Berhasil Dihapus!");
            window.location.replace("../index-karyawan.php")
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Data Gagal Dihapus!");
            window.location.replace("../index-karyawan.php")
        </script>
    <?php
}