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
        input[type=text], input[type=email], input[type=password] {
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
        <a href="../index-guru.php">
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
                        <td>NIP</td>
                        <td>:</td>
                        <td><input type="text" name="nip" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td> 
                        <td><input type="email" name="email" id="satu" required></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <select name="status" required>
                                <option value="aktif">Aktif</option>
                                <option value="tidak_aktif">Tidak Aktif</option>
                            </select>
                        </td>
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
            $nip = $_POST['nip'];
            $namaLengkap = $_POST['nama_lengkap'];
            $email = $_POST['email'];
            $status = $_POST['status'];
            $sql = "INSERT INTO guru (NIP,nama_lengkap,email,status) VALUES ('$nip','$namaLengkap','$email','$status')";
            
            if (mysqli_query($mysqli, $sql)) echo "<script>alert(\"Registrasi Berhasil!\"); window.location.replace(\"../index-guru.php\");</script>";
            else echo "<script>alert(\"Registrasi Gagal!\")</script>";
        }

    ?>
</body>
</html>