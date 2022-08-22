<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Document</title>
    <style type = "text/css">

        .tambah{
            background-color: salmon;
            color : white;
            padding : 10px;
            font-size : 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

    </style>
</head>
<body>
<table border="1" id="table_id" class="display">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>judul</th>
            <th>deskripsi</th>
            <th>tanggal</th>
            <th>status</th>
            <th>edit</th>
        </tr>
    </thead>
    <?php
            include "koneksi.php";
            //manggil data
            $query= "SELECT * FROM list_gambar";
            $result= mysqli_query($con,$query);
        ?>
    <tbody>
             <?php
                while ($row = mysqli_fetch_array($result)) {
                $id = $row['id_blog'];
                $gambar = $row['gambar'];
                $judul = $row['judul'];
                $deskripsi = $row['deskripsi'];
                $tanggal = $row['tanggal'];
                $status = $row['status'];  
            ?>

            <tr>
                <td><?=$id?></td>
                <td><?=$judul?> </td>
                <td><?=$deskripsi?></td>
                <td><?=$tanggal?></td>
                <td><?=$status?></td>
                <td>
                    <a href='edit.php?kode=<?=$id?>'> Edit </a>
                    
                    <a href="?kode=<?=$id?>">Hapus</a>
                </td>
            </tr>

            <?php
                }
            ?>
    </tbody>
</table>

<?php
    
        if(isset($_GET['kode'])){
            mysqli_query($con,"delete from list_gambar where id_blog='$_GET[kode]'");
            echo "Data Telah terhapus";
            
            echo "<meta http-equiv=refresh content=2;URL='table.php'";
        }
        ?>

<center><a href="add.php" class="tambah">+ &nbsp; Tambah Produk</a><center>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
    
</body>
</html>