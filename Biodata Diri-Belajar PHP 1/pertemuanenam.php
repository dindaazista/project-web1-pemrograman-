<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <form action="formregistrasi.php" method="post">
        <fieldset>
            <legend>Isi Data Dibawah ini </legend>

            <label>Input Nama : </label>
            <input type="text" name="nama"><br>

            <label> Alamat : </label>
            <textarea name="alamat" cols="20" rows="5"></textarea><br>

            <label>Tempat Lahir : </label>
            <input type="text" name="TL"><br>

            <label>tanggal lahir : </label>
            <input type="date" name="tanggal lahir"><br>

            <label>jenis kelamin : </label>
            <input type="radio" name="jk" value="Laki-laki"> laki-laki
            <input type="radio" name="jk" value="perempuan" checked>perempuan<br>

            <label>pendidikan : </label>
            <select> name="pendidikan">
                <option value=""> -== Pilih Disini ==-</option>
                <option value="S1">Sarjana1</option>
                <option value="S2">Sarjana2</option>
                <option value="S3">Sarjana3</option>
            </select><br>

            <label>Hobi : </label>
            <input type="checkbox" name="hobi1" value="menyanyi"> menyanyi
            <input type="checkbox" name="hobi2" value="berkebun"> berkebun
            <input type="checkbox" name="hobi3" value="travelling"> travelling<br>

            <input type="submit" value="proses">
            <input type="reset" value="cancel">
        </fieldset>
    </form>
</body>

</html>