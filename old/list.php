<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        table tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>

            <?php 
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($mysqli, $sql);
                $i = 1;
                while ($data = mysqli_fetch_array($query)) {
                
            ?>
            <tr>
            <td><?= $i ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['agama'] ?></td>
            </tr>
            <?php 
            $i++;
            } 
            ?>
    </table>
</body>
</html>