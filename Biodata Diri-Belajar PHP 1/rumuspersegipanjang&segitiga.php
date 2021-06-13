    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> RUMUS-RUMUS</title>
    </head>

    <body>
        <?php
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $rms = $_POST['rumus'];
        ?>
        <h3>HASIL HITUNG RUMUS</h3>
        Nilai a adalah = <?php echo "$nilai1"; ?> <br>
        nilai b adalah= <?php echo  "$nilai2"; ?> <br>
        <?php
        if ($nilai1 == "0" && $nilai2 == "0") {
            echo "Tidak ada Hasil Perhitungan";
        } else {
            if ($rms == "segitiga") {
                $hasil = 0.5 * ($nilai1 * $nilai2);
                echo "rumus yang dipilih adalah =segitiga<br>
            hasil perhitungan rumus = $hasil";
            } else {
                $hasil = 0.5 * ($nilai1 * $nilai2);
                echo "rumus yang dipilih adalah =persegi panjang<br>
            hasil perhitungan rumus = $hasil";
            }
        }
        ?>
    </body>

    </html>