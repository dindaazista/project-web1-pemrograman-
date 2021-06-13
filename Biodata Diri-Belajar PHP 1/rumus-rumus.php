<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width-, initial-scale=1.0">
    <title> rumus persegi panjang dan segitiga</title>
</head>

<body>
    <center>
        <h3>RUMUS-RUMUS </h3>
        <form action="rumus-rumus.php" method="POST">
            <table border="1">
                <tr>
                    <td>Nilai 1 </td>
                    <td><input type="number" name="nilai1"></td>
                </tr>
                <tr>
                    <td>Nilai 2 </td>
                    <td><input type="number" name="nilai2"></td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="radio" name="rumus" value="segitiga">segitiga<br>
                        <input type="radio" name="rumus" value="persegipanjang">persegipanjang<br>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Hitung">
            <input type="submit" value="Batal">
        </form>
    </center>
</body>

</html>