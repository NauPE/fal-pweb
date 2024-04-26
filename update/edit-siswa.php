<?php 
    require '../config.php';
    $id = $_GET['id'];
    $query = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");
    $data = mysqli_fetch_array($query);
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
            font-size: 16px;
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
        <a href="../index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            Kembali
        </a>
        <fieldset>
            <legend>Edit Data</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="satu" value="<?= $data['nama'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" id="satu" value="<?= $data['username'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td> 
                        <td><input type="email" name="email" id="satu" value="<?= $data['email'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" id="satu" value="<?= $data['password'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" value="Laki-laki" name="jenis_kelamin" <?php if($data['jenis_kelamin']=="Laki-laki") echo "checked" ?> required>Laki-laki</option><br>
                            <input type="radio" value="Perempuan" name="jenis_kelamin" <?php if($data['jenis_kelamin']=="Perempuan") echo "checked" ?> >Perempuan</option>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="agama" required>
                                <option value="Islam" <?php if($data['agama']=="Islam") echo "selected" ?> >Islam</option>
                                <option value="Hindu" <?php if($data['agama']=="Hindu") echo "selected" ?>>Hindu</option>
                                <option value="Kristen Protestan" <?php if($data['agama']=="Kristen Protestan") echo "selected" ?> >Kristen Protestan</option>
                                <option value="Kristen Katholik" <?php if($data['agama']=="Kristen Katholik") echo "selected" ?> >Kristen Katholik</option>
                                <option value="Budha" <?php if($data['agama']=="Budha") echo "selected" ?> >Budha</option>
                                <option value="Konghucu" <?php if($data['agama']=="Konghucu") echo "selected" ?> >Konghucu</option>
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
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $sql = "UPDATE siswa SET nama='$nama',username='$username',email='$email',password='$password',jenis_kelamin='$jenis_kelamin',agama='$agama' WHERE id=$id";
            if (mysqli_query($mysqli, $sql)) echo "<script>alert(\"Edit Berhasil Disimpan!\"); window.location.href(\"../index.php\");</script>";
            else echo "<script>alert(\"Edit Gagal!\")</script>";
        }

    ?>
</body>
</html>