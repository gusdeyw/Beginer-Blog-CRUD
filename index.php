<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Page User</title>
</head>
<body class="bg-gray-200 text-black">
    <?php
        include "koneksi.php";
        $query="SELECT * FROM list_gambar";
        $result=mysqli_query($con,$query);
    ?>
    <!-- utk container mau seberapa besar-->
    <div class="mx-auto w-10/12 my-10">
        <!-- pembungkus colom -->
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
            <div class="max-w-lg mx-auto h-auto">
                <div class="bg-white shadow-m mb-6 min-h-full max-w-sm rounded-lg">
                    <!-- pembungkus gambar -->
                    <div class="bg-center bg-cover block w-full">
                    <div class="relative text-white">
                        <img src="<?= $gambar?>" class="rounded-lg">

                        <a class="absolute inset-0 z-10 bg-gray-700  flex flex-col items-center justify-center opacity-0 hover:opacity-100 bg-opacity-90 duration-300">
                            <h1><?= $tanggal?></h1>
                            <p><?= $status?></p>
                            </a>
                    </div>
                    
                
                    <div class="p-3">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2"><?= $judul?></h5>
                        <p class="text-justify text-gray-600 mb-3 font-normal"><?= substr($deskripsi, 0, 100);?> ..</p>
                        <a class="text-white font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="blog_detail.php?id=<?= $id?>" style="background-color: #ef3700"> Read More</a>
                        <!-- <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> -->
                    </div>
                </div>
            </div>
        </div>
            <!-- akhir pembungkus content nomor 1 -->

        <?php
        }
        ?>
    </div>
    <!-- akhir pembungkus grid -->

</div>
<!-- akhir pembungkus w-10/12 -->

</body>
</html>