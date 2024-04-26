<?php 
    require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <style>
        .container {
            width: 650px;
            margin: 50px auto;
        }
        legend {
            font-size: 20px;
            font-weight: bold;
        }
        td {
            font-size: 18px;
        }
        input[type=text], input[type=email], input[type=password], input[type=number] {
            height: 18px;
            font-size: 18px;
            width: 100%;
            background-color: #f0f0f0;
        }
        select {
            height: 18px;
            font-size: 18px;
        }
        table {
            width: 100%;
        }
        table tr td:first-child {
            width: 150px;
        }
        button {
            background-color: #525aff;
            color: white;
            text-decoration: none;
            font-size: 15px;
            border-radius: 10px;
            text-align: center;
            border: none;
            margin-top: 15px;
            float: right;
        }
        a {
            color: gray;
            text-decoration: none;
            font-size: 20px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        a svg {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="../index-karyawan.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            Kembali
        </a>
        <fieldset>
            <legend>Tambah Data</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="nik" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" value="P" name="jenis_kelamin" required>Perempuan</option>
                            <input type="radio" value="L" name="jenis_kelamin" required>Laki-laki</option>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td> 
                        <td><input type="text" name="alamat" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>DIV</td>
                        <td>:</td> 
                        <td><input type="text" name="divv" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td> 
                        <td><input type="text" name="level" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td> 
                        <td><input type="text" name="jabatan" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Gaji</td>
                        <td>:</td> 
                        <td><input type="number" name="gaji" id="satu" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="submit" value="submit" style="width: 80px; height: 40px;">
                                Simpan
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    <?php 
        if (isset($_POST['submit'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $jenisKelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $div = $_POST['divv'];
            $level = $_POST['level'];
            $jabatan = $_POST['jabatan'];
            $gaji = $_POST['gaji'];
            $sql = "INSERT INTO karyawan (NIK,nama,jenis_kelamin,alamat,divv,level,jabatan,gaji) VALUES ('$nik','$nama','$jenisKelamin','$alamat','$div','$level','$jabatan','$gaji')";
            
            if (mysqli_query($mysqli, $sql)) echo "<script>alert(\"Registrasi Berhasil!\"); window.location.replace(\"../index-karyawan.php\");</script>";
            else echo "<script>alert(\"Registrasi Gagal!\")</script>";
        }

    ?>
</body>
</html>