<?php
include "koneksi.php";
$query = "SELECT * FROM list_gambar WHERE id_blog = '$_GET[id]'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$blog_desc = '';
$blog_desc = $row['deskripsi'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Detail Blog</title>
</head>

<body class="bg-gray-300 text-black">
    <div class="w-10/12 my-8 mx-auto ">
        <img src="<?= $row['gambar'] ?>" class="bg-center bg-cover block w-full h-screen" alt="">
    </div>
    <div class="w-10/12 min-h-screen mb-5 mx-auto bg-white p-5">
        <h1 class="font-bold text-3xl mb-5"><?= $row['judul'] ?></h1>
        <p class="p-1"><?= $blog_desc ?></p>
    </div>
</body>

</html>