<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Keliling dan luas lingkaran</title>
</head>
<body>
    <h3>Menghitung Luas Segitiga Menggunakan Variabel</h3>
    <?php
    $alas=30;
    $tinggi=10;
    $LuasSegitiga=($alas*$tinggi)/2
   ?>
   <hr/>
   <form action="method="POST">
    <table border="0">
    <tr>
       <td>alas</td>
       <td><input type="text" name="alas"value="<?php echo $alas;?>">cm</td>
    </tr>
    <tr>
       <td>tinggi</td>
        <td><input type="text" name="alas"value="<?php echo $tinggi;?>">cm</td>
    </tr>
    <tr>
      <td>LuasSegitiga</td>
      <td><?php echo$LuasSegitiga;?></td>
    <td></td>
      <td><input type="submit"= name="submit"value="hitung"> <a href="./">Hitung lagi</a></td>
    </tr>
  </table>
 </table>
</body>
</html>