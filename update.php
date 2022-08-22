<?php 
include 'koneksi.php';

$id = $_POST['id_blog'];
// $gambar = $_POST['fileToUpload'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal']; 
$status = $_POST['status']; 

// $query = "UPDATE list_gambar SET judul='$judul', deskripsi='$deskripsi' WHERE id_blog = '$id'";

// mysqli_query($con,$query);
// entah kenapa pas aku nambahin SET gambar='$gambar' ini dia jadi ga mau nge proses edit nya gambar='$gambar'
mysqli_query($con,"UPDATE list_gambar SET judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', status='$status' WHERE id_blog = '$id'");

echo $id;

echo $judul;
echo $deskripsi;
echo $tanggal;

echo "<script>alert('Data berhasil diubah.');window.location='table.php';</script>";

// echo "Data Telah di ubah";
            
// echo "<meta http-equiv=refresh content=1;URL='table.php'";
 
?>