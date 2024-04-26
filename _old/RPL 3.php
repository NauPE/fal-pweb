<?php
    // $a='2';
    // $b='3';
    // $hasil = $a + $b;
    // echo "hasilnya adalah = $hasil";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harldav</title>
</head>
<body>
    <form action="" method="post">
        Nama:
        <input type="text" name="nama" id="satu"><br>
        Username:
        <input type="text" name="username" id="satu"><br>
        Email:
        <input type="email" name="email" id="satu"><br>
        Password:
        <input type="password" name="password" id="satu"><br>
        Jenis Kelamin:
            <input type="radio" value="Laki-laki" name="jenis_kelamin">Laki-laki</option>
            <input type="radio" value="Perempuan" name="jenis_kelamin">Perempuan</option><br>
        Agama:
        <select name="agama"><br>
            <option value="Islam">Islam</option>
            <option value="Hindu">Hindu</option>
            <option value="Kristen Protestan">Kristen Protestan</option>
            <option value="Kristen Katholik">Kristen Katholik</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>

        </select><br>
        <button type="submit" name="submit" value="submit">
            Simpan
        </button>
        

       
    </form>
    <br>
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

        <!-- nama 
        username
        password
        jenis kelamin -->
</body>
</html>