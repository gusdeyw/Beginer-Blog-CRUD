<?php include 'layout/header.php'; ?>
<title>Blog List</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include 'layout/navbar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-8">
            <div class="flex w-full">
                <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                    Blog List
                </p>
                <div class="flex ml-auto bg-white rounded-lg hover:bg-bvr20 hover:text-white text-bvr20">
                    <a href="blog-add-admin.php" class="px-4 py-2 flex">
                        <i class="fas fa-plus-circle mt-1 mr-1"></i>
                        <p>Add New Blog</p>
                    </a>
                </div>
            </div>
            <table id="table_id" class="bg-">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tittle</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>status</th>
                        <th>edit</th>
                    </tr>
                </thead>
                <?php
                include "koneksi.php";
                //manggil data
                $query = "SELECT * FROM list_gambar";
                $result = mysqli_query($con, $query);
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
                            <td><?= $id ?></td>
                            <td><?= $judul ?> </td>
                            <td><?= $gambar ?></td>
                            <td><?= $tanggal ?></td>
                            <td><?php if($status == 'aktif'){
                                echo "Active";
                            }else {
                                echo "Non Active";
                            } ?></td>
                            <td>
                                <a href='blog-detail-admin.php?kode=<?= $id ?>'> Edit </a>

                                <a href="delete.php?kode=<?= $id ?>">Delete</a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>