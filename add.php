<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form INPUT</h3>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
                <td width="130">Upload Gambar</td>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>

            <tr>
                <td>judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td><input type="datetime-local" name="tanggal"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="radio" name="status" value="aktif">
                    <label for="aktif">aktif</label>
                    <input type="radio" name="status" value="nonaktif">
                    <label for="nonaktif">nonaktif</label>
                </td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        include "koneksi.php";
    ?>
</body>
</html>