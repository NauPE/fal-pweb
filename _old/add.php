<?php 
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <fieldset>
        <legend>Register</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="satu"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" id="satu"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="satu"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" id="satu"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" value="Laki-laki" name="jenis_kelamin">Laki-laki</option>
                        <input type="radio" value="Perempuan" name="jenis_kelamin">Perempuan</option>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katholik">Kristen Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit" value="submit" style="width: 80px; height: 40px;">
                            Simpan
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php 
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $sql = "INSERT INTO siswa (nama,username,email,password,jenis_kelamin,agama) VALUES ('$nama','$username','$email','$password','$jenis_kelamin','$agama')";
            
            if (mysqli_query($mysqli, $sql)) echo "<script>alert(\"Registrasi Berhasil!\")</script>";
            else echo "<script>alert(\"Registrasi Gagal!\")</script>";
        }

    ?>
</body>
</html>