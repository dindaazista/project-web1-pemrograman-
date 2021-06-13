<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <?php
    $Nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempatlahir = $_POST['TL'];
    $tanggallahir = $_POST['tanggallahir'];
    $jk = $_POST['jk'];
    $pendidikan = $_POST['pendidikan'];
    $hobi1 = $_POST['hobi1'];
    $hobi2 = $_POST['hobi2'];
    $hobi3 = $_POST['hobi3'];
    ?>

    <table>
        <tr>
            <th colspan "10">Form Registrasi</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?= $Nama ?></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>tempatlahir</td>
            <td><?= $tempatlahir ?></td>
        </tr>
        <tr>
            <td>tanggallahir</td>
            <td><?= $tanggallahir ?></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td><?= $jk ?></td>
        </tr>
        <tr>
            <td>pendidikan</td>
            <td><?= $pendidikan ?></td>
        </tr>
        <tr>
            <td>hobi</td>
            <td><?= $hobi1 . ", " . $hobi2 . ", " . $hobi3 ?></td>
        </tr>
    </table>

    <a href="formregistrasi.php" target="_blank">INPUT DATA LAGI</a>
</body>

</html>