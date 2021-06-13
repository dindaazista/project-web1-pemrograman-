<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>

<body>
<?php
    $NamaLengkap = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $Jeniskelamin = $_POST['Jk'];
    $Notelp = $_POST['Notelp'];
    $Email = $_POST['email'];
    $Tglpertemuan = $_POST['tglpertemuan'];
    ?>
    <table>
        <tr>
            <th colspan "10">Daftar Registrasi</th>
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
            <td>jenis kelamin</td>
            <td><?= $jk ?></td>
        </tr>
        <tr>
            <td>Notelp</td>
            <td><?= $Notelp ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?= $Email ?></td>

        </tr>
        <tr>
            <td>Tgl pertemuan</td>
            <td><?= $tglpertemuan?></td>
            
        </tr>
        <tr>
            
    </table>

    <a href="daftarregistrasi.php" target="_blank">INPUT DATA LAGI</a>
</body>
        </fieldset>
    </form>
</body>

</html>