<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        body {
            font-family: Arial;
            background-color: #c6d3f3;            
        }
        table { 
            width: 100%;
        }
        table, tr, td, th {
            /* border: 1px solid gray; */
            border-collapse: collapse;
            /* font-size: 18px; */
            padding: 5px 10px;
            text-align: center;
        }
        tr:first-child {
            background-color: #6e7bd9;
            color: white;
            border: none;
            /* border-top-left-radius: 10px; */
        }
        tr:first-child th {
            padding: 15px 5px;
        }
        tr:first-child th:first-child {
            border-top-left-radius: 10px;
        }
        tr:first-child th:last-child {
            border-top-right-radius: 10px;
        }
        tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }
        tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }
        tr {
            background-color: #f5f5f5;
            border-bottom: 1px solid lightgray;
        }
        .container {
            width: 1042px;
            padding: 40px;
            margin: 70px auto;
            /* background-color: #f5f5f5; */
            border-radius: 20px;
        }
        .title  {
            margin: 0;
            padding: 0;
            font-size: 30px;
        }
        .button-blue {
            background-color: #6e7bd9;
            color: white;
            padding: 8px;
            display: flex;
            flex-direction: row;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            align-items: center;
        }
        .button-red {
            background-color: #f84f4f;
            color: white;
            padding: 8px;
            display: flex;
            flex-direction: row;
            text-decoration: none;
            font-size: 15px;
            border-radius: 5px;
            align-items: right;
        }
        .line {
            width:100%;
            height:2px;
            border-bottom: 2px solid white;
            margin-top: 10px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">List Data Karyawan</h2>
        <a href="create/add-karyawan.php" class="button-blue" style="width:80px; height:18px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16" style="margin-right: 5px;">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            Tambah
        </a>
        <div class="line"></div>
        <table>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>DIV</th>
                <th>Level</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th colspan="2">Action</th>
            </tr>

                <?php 
                    $sql = "SELECT * FROM karyawan";
                    $query = mysqli_query($mysqli, $sql);
                    $i = 1;
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                <td style="text-align: center"><?= $i ?></td>
                <td><?= $data['NIK'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jenis_kelamin'] ?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['divv']?></td>
                <td><?= $data['level']?></td>
                <td><?= $data['jabatan']?></td>
                <td><?= $data['gaji']?></td>
                <td>
                    <a href="update/edit-karyawan.php?nik=<?= $data['NIK'] ?>" class="button-blue" style="width: 16px; margin: 2px auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </a>
                </td>
                <td style="text-align: center">
                    <a href="delete/delete-karyawan.php?nik=<?= $data['NIK'] ?>" class="button-red" style="width: 16px; margin: 2px auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </a>
                </td>
                </tr>
                <?php 
                $i++;
                } 
                ?>
        </table>
    </div>
</body>
</html>