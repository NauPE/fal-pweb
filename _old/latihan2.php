<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P</title>
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
                        <button type="submit" name="submit" value="submit" style="width: 80px; height: 50px;">
                            Simpan
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php 
        if (isset($_POST['submit'])) {
            echo "Nama: ".$_POST['nama'] . "<br>";
            echo "Username: ".$_POST['username'] . "<br>";
            echo "Email: ".$_POST['email'] . "<br>";
            echo "Password: ".$_POST['password'] . "<br>";
            echo "Jenis Kelamin: ".$_POST['jenis_kelamin'] . "<br>";
            echo "Agama: ".$_POST['agama'] . "<br>";
        }
    
    ?>
</body>
</html>