<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan foreach</title>
</head>

<body>
    <?php
    $warna = array("merah", "biru", "kuning", "Hijau", "Ungu");
    foreach ($warna as $w) {
        echo $w . "<br>";
    }
    ?>
</body>

</html>