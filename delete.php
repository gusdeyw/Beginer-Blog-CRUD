<?php
include 'koneksi.php';
if (isset($_GET['kode'])) {
    $kode_id = $_GET['kode'];
    $query = "select * from list_gambar where id_blog='$kode_id'";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $link_gambar = $row['gambar'];
    }
    unlink($link_gambar);
    mysqli_query($con, "delete from list_gambar where id_blog='$_GET[kode]'");
    header('location: blog-list.php');
    exit();
}
?>