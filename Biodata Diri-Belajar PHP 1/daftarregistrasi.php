<!DOCTYPE html>
<html>

<head>
    <title>form registrasi konsumen</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <div class="wrap">
        <div class="container" <h1>Pendaftaran Konsumen</h1>
            <form action="" method="">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>jenis kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" value="laki-laki">laki-laki
                            <input type="radio" name="jk" value="perempuan">perempuan
                    </tr>
                    <tr>
                        <td>No.Telp</td>
                        <td>:</td>
                        <td><input type="number" name="no_telp"></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>:</td>
                        <td><input type="text" name="E-mail"></td>
                    </tr>
                    <tr>
                        <td>Tgl.Pertemuan</td>
                        <td>:</td>
                        <td><input type="date" name="Tgl.Pertemuan"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name=kirim>kirim</button>
                            <button type="reset" name="reset">batal</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>

</html>