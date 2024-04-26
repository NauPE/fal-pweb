<?php
require '../config.php';
$nip = $_GET['nip'];
$query = mysqli_query($mysqli, "DELETE FROM guru WHERE nip=$nip");
if ($query) {
    ?>
        <script>
            alert("Data Berhasil Dihapus!");
            window.location.replace("../index-guru.php")
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Data Gagal Dihapus!");
            window.location.replace("../index-guru.php")
        </script>
    <?php
}