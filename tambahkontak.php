<!DOCTYPE html>
<html>

<head>
    <title>Form Input Kontak</title>
</head>

<body>
    <form method="post" action="simpankontak.php">
        <table>
            <tr>
                <td>id</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="id"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td><input type="text" name="Kota"></td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td><input type="textarea" name="Pesan"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>