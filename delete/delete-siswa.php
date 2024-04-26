<?php
require '../config.php';
$id = $_GET['id'];
$query = mysqli_query($mysqli, "DELETE FROM siswa WHERE id=$id");
if ($query) {
    ?>
        <script>
            alert("Data Berhasil Dihapus!");
            window.location.replace("../index.php")
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Data Gagal Dihapus!");
            window.location.replace("../index.php")
        </script>
    <?php
}