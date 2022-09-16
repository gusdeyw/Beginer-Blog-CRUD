<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/styles.css">
    <title>Page User</title>
</head>

<body class="bg-gray-200 text-black">
    <?php
    include "koneksi.php";
    $query = "SELECT * FROM list_gambar where tanggal <= NOW()  && status = 'aktif'";
    $result = mysqli_query($con, $query);
    ?>
    <!-- utk container mau seberapa besar-->
    <?php
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id_blog'];
        $gambar = $row['gambar'];
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
        $tanggal = $row['tanggal'];
        $status = $row['status'];
    ?>
        <div class="max-w-lg mx-auto">
            <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                <a href="blog_detail.php?id=<?= $id ?>">
                    <div class="bg-center bg-cover block h-52" style="background-image: url('<?= $gambar ?>');"></div>
                </a>
                <div class="p-3">
                    <a href="blog_detail.php?id=<?= $id ?>">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2"><?= $judul ?></h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3"><?= mb_strimwidth($deskripsi, 0, 160, "...") ?></p>
                </div>
                <div class="p-3">
                    <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="blog_detail.php?id=<?= $id ?>" style="background-color: #ef3700;">
                        Read more
                    </a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- akhir pembungkus w-10/12 -->

</body>

</html>