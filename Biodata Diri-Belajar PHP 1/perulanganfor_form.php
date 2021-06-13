<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan for dalam FORM</title>
</head>

<body>
    <form action="" method="post">
        <select name="tanggal">
            <option value="">-== Pilih Tanggal ==-</option>
            <?php
            for ($tanggal = 1; $tanggal <= 31; $tanggal++) {
                echo "<option value='$tanggal'>$tanggal</option>";
            }
            ?>
        </select>

        <br><br>
        <select name="tanggal2">
            <option value="">-== Pilih Tanggal ==-</option>
            ?>
            <?php for ($tanggal2 = 1; $tanggal2 <= 31; $tanggal++) : ?>
                <option value=="<?= $tanggal2 ?>"></option>
            <?php endfor; ?>
        </select>
    </form>
</body>

</html>