<?php 
    require 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE id=$id";
    $query = mysqli_query($mysqli, $sql);
    $data = mysqli_fetch_array($query);

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
                    <td><input type="text" name="nama" id="satu" value="<?= $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" id="satu" value="<?= $data['username'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="satu" value="<?= $data['email'] ?>" ></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" id="satu" value="<?= $data['password'] ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" value="Laki-laki" name="jenis_kelamin" <?php if($data['jenis_kelamin'] == "Laki-laki") echo "checked" ?>>Laki-laki</option>
                        <input type="radio" value="Perempuan" name="jenis_kelamin" <?php if($data['jenis_kelamin'] == "Perempuan") echo "checked" ?>>Perempuan</option>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                            <option value="Islam" <?php if($data['agama'] == "Islam") echo "selected" ?>>Islam</option>
                            <option value="Hindu" <?php if($data['agama'] == "Hindu") echo "selected" ?>>Hindu</option>
                            <option value="Kristen Protestan" <?php if($data['agama'] == "Kristen Protestan") echo "selected" ?>>Kristen Protestan</option>
                            <option value="Kristen Katholik" <?php if($data['agama'] == "Kristen Katholik") echo "selected" ?>>Kristen Katholik</option>
                            <option value="Budha" <?php if($data['agama'] == "Budha") echo "selected" ?>>Budha</option>
                            <option value="Konghucu" <?php if($data['agama'] == "Konghucu") echo "selected" ?>>Konghucu</option>
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
            $sql = "UPDATE siswa SET nama='$nama',username='$username',email='$email',password='$password',jenis_kelamin='$jenis_kelamin',agama='$agama' WHERE id=$id";
            if (mysqli_query($mysqli, $sql)) echo "<script>alert(\"Registrasi Berhasil!\")</script>";
            else echo "<script>alert(\"Registrasi Gagal!\")</script>";
        }

    ?>
</body>
</html>