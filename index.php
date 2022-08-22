<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <title>Page User</title>
</head>
<body class="bg-gray-200 text-black">
    <?php
        include "koneksi.php";
        $query="SELECT * FROM list_gambar where tanggal <= CURDATE() && status = 'aktif'";
        $result=mysqli_query($con,$query);
    ?>
    <!-- utk container mau seberapa besar-->
    <div class="mx-auto w-10/12 my-10">

    <div class="grid grid-cols-3 gap-4 ">

            <?php 
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id_blog'];
                    $gambar= $row['gambar'];
                    $judul= $row['judul'];
                    $deskripsi= $row['deskripsi'];
                    $tanggal= $row['tanggal'];
                    $status= $row['status'];
            ?>
            <!-- pembungkus content nomor 1 -->

        <div class="max-w-lg bg-white rounded-lg border border-gray-200 shadow-lg dark:bg-gray-800 dark:border-gray-700">
           
                <div class="bg-center bg-cover" style="height: 300px; background-image: url('<?= $gambar ?>');"></div>
           
            
                <div class="p-3">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2"><?= $judul?></h5>
                        <p class="text-justify text-gray-600 mb-3 font-normal"><?= substr($deskripsi, 0, 100);?> ..</p>
                        <a class="text-white font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="blog_detail.php?id=<?= $id?>" style="background-color: #ef3700"> Read More</a>
                        <!-- <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> -->
                    </div>
        </div>

            <!-- akhir pembungkus content nomor 1 -->

        <?php
        }
        ?>
    </div>

    
</div>
<!-- akhir pembungkus w-10/12 -->

</body>
</html>
