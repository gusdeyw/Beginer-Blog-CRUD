<?php

include "koneksi.php";
// if(isset($_GET['id_blog'])){
//     $id = $_GET['id_blog']; 
//     }else{
//     $id = "<br>id tidak diset di Method GET ";
//     }

$query = "SELECT * FROM list_gambar WHERE id_blog = '$_GET[kode]'";
$result = mysqli_query($con, $query);
// $query=mysqli_query($con,"select * from list_gambar where id_blog='$_GET[kode]'");
$row = mysqli_fetch_array($result);
$gambar = $row['gambar'];
?>
<?php include 'layout/header.php'; ?>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<title>Blog <?= $row['judul'] ?> Detail</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include 'layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <main class="w-full flex-grow p-8">
                <div class="flex w-full">
                    <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                        Blog Detail
                    </p>
                </div>
                <div class="bg-white rounded-t-lg mt-5 px-10 py-7">
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <input hidden type="text" name=id_blog value="<?= $row['id_blog'] ?>">
                        <input hidden type="text" name="filehidden" class="w-max mt-1 py-1 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md" value="<?php echo $row['gambar'] ?>">
                        <table>
                            <tr>
                                <td width="130">Blog Image</td>

                                <td><img src="<?= $gambar ?>" class="rounded-lg" style="height: 200px;"></td>
                            </tr>
                            <tr>
                                <td width="130">Change Image</td>
                                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                            </tr>
                            <tr>
                                <td>Blog Tittle</td>
                                <td><input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 border-2 border-gray-300 focus:ring-bvr20 focus:border-transparent rounded-md" name="judul" value="<?= $row['judul'] ?>"></td>

                            </tr>
                            <tr>

                                <td>Description</td>
                                <td>
                                    <textarea name="deskripsi" id="blogcontent" cols="30" rows="10"> <?php echo $row['deskripsi'] ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Date Posted</td>
                                <td><input class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 border-2 border-gray-300 focus:ring-bvr20 focus:border-transparent rounded-md" type="datetime-local" name="tanggal" value="<?php echo $row['tanggal'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <input type="radio" name="status" value="aktif" <?php if ($row['status'] == 'aktif') {
                                                                                        echo "checked";
                                                                                    } ?>>
                                    <label for="aktif">Active</label>
                                    <input type="radio" name="status" value="nonaktif" <?php if ($row['status'] == 'nonaktif') {
                                                                                            echo "checked";
                                                                                        } ?>>
                                    <label for="nonaktif">Non Active</label>
                                </td>
                            </tr>
                            <br>
                        </table>
                </div>
                <!-- Button -->
                <div class="flex">
                    <button type="submit" name="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <!-- <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button> -->
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800"><a href="blog-list.php">Cancel</a></button>
                </div>
        </form>

        </main>
        </form>
    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- CK-Editor -->
    <script>
        CKEDITOR.replace('blogcontent', {
            height: 500,
        });
    </script>
</body>

</html>