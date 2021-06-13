<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rumus keliling dan luas segitiga</title>
</head>

<body>
   <h3>Menghitung Keliling Segitiga menggunakan variabel </h3>
   <?php
   $nilai1 = $_POST['nilai1'];
   $nilai2 = $_POST['nilai2'];
   $rumus = $_POST['rumus'];

   if ($rumus == "segitiga") {
      $rumus = 0.5 * ($nilai1 * $nilai2);
   } elseif ($rumus == "persegi panjang") {
      $rumus = $nilai1 * $nilai2;
   } else {
      $rumus = 0;
   }
   ?>
   Nilai a =<?= $nilai1; ?> <br>
   nilai b =<?= $nilai2; ?> <br>
   hasil perhitungan rumus adalah <?= $rumus; ?>
</body>

</html>