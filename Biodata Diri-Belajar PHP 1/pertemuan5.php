<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar Belanja</title>
</head>
<body>
<h2>Contoh Daftar Belanja</h2>
<table border="20" style="width: 300px;" >
 <body bgcolor="pink" text="black"> 
    <?php
    $produkA="teh";
    $produkB="gula pasir";
    $produkC="minyak";
    $hargaProdukA=6000;
    $hargaProdukB=13000;
    $hargaProdukC=17000;
    $satuanA="kotak";
    $satuanB="kg";
    $satuanC="lt";
    $totalhargaA=$hargaProdukA*3;
    $totalhargaB=$hargaProdukB*4;
    $totalhargaC=$hargaProdukC*5;
    $hargaDiskonA=$totalhargaA*0.10;
    $hargaDiskonB=$totalhargaB*0.10;
    $hargaDiskonC=$totalhargaC*0.10;
    $subtotalA=$totalhargaA-$hargaDiskonA;
    $subtotalB=$totalhargaB-$hargaDiskonB;
    $subtotalC=$totalhargaC-$hargaDiskonC;
    $grandTotal=$subtotalA+$subtotalB+$subtotalC;
    ?>
     <?
      <tr> 
      <th>Nama Produk</th>
      <th>Harga produk</th>
      <th>jumlah beli</th>
      <th>satuan</th>
      <th>Total harga</th>
      <th>diskon</th>
      <th>subtotal</th>
      </tr>
    
       <tr>
      <td> <?php echo $produkA; ?></td>
       <td> <?php echo $hargaProdukA; ?></td>
       <td> <?php echo 3; ?></td>
       <td> <?php echo $satuanA; ?></td>
       <td> <?php echo $totalhargaA; ?></td>
       <td> <?php echo $hargaDiskonA; ?></td>
       <td> <?php echo $subtotalA; ?></td>
     </tr>
    
     <tr>
    <td> <?php echo $produkB; ?></td>
     <td> <?php echo $hargaProdukB; ?></td>
     <td> <?php echo 4; ?></td>
      <td> <?php echo $satuanB; ?></td>
     <td> <?php echo $totalhargaB; ?></td>
     <td> <?php echo $hargaDiskonB ; ?></td>
     <td> <?php echo $subtotalB; ?></td>
     </tr>

     <tr>
     <td> <?php echo $produkC ;?></td>
     <td> <?php echo $hargaProdukC;?></td>
     <td> <?php echo 5;?></td>
     <td><?php echo $satuanC; ?></td>
     <td> <?php echo$totalhargaC;?></td>
     <td> <?php echo$hargaProdukC;?></td>
      <td><?php echo$subtotalC;?></td>
     </tr>
     
<tr>
 <td><p>align="center">$grandTotal</td></p>
</tr>
    
   
    </table>
</body>
</html>