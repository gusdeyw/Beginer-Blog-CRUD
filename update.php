<?php
include 'koneksi.php';

$id = $_POST['id_blog'];

$target_dir = "img/";
$target_file = $target_dir . rand(10, 100) . rand(10, 100) . rand(10, 100) . rand(10, 100) . rand(10, 100) . rand(10, 100) . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$hidden_file = $_POST['filehidden'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

// echo $id;

// echo $judul;
// echo $deskripsi;
// echo $tanggal;
// $con ="UPDATE list_gambar SET gambar='$hidden_file', judul='$judul', deskripsi='".$deskripsi."', tanggal='$tanggal', status='$status' WHERE id_blog = '$id'";
?>

<!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->

<?php

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  if ($_FILES["fileToUpload"]["tmp_name"] == "") {
    mysqli_query($con, "UPDATE list_gambar SET gambar='$hidden_file', judul='$judul', deskripsi='" . $deskripsi . "', tanggal='$tanggal', status='$status' WHERE id_blog = '$id'");
    echo "<br>";
    echo "<script>alert('Blogs are saved Successfuly.');window.location='blog-list.php';</script>";
  } else {
    unlink($hidden_file);

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000000000000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" && $imageFileType != "webp" && $imageFileType != ""
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }



    // $query = "UPDATE list_gambar SET judul='$judul', deskripsi='$deskripsi' WHERE id_blog = '$id'";

    // mysqli_query($con,$query);
    // entah kenapa pas aku nambahin SET gambar='$gambar' ini dia jadi ga mau nge proses edit nya gambar='$gambar'
    $res = mysqli_query($con, "UPDATE list_gambar SET gambar='$target_file', judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', status='$status' WHERE id_blog = '$id'");

    // echo $id;

    // echo $judul;
    // echo $deskripsi;
    // echo $tanggal;
    echo "<br>";
    echo "<script>alert('Blogs are saved Successfuly.');window.location='blog-list.php';</script>";
  } //penutup else unlink (jika ada gambar)
} //penuutp submit

// echo "<script>alert('Data berhasil diubah.');window.location='table.php';</script>";

// echo "Data Telah di ubah";

// echo "<meta http-equiv=refresh content=1;URL='table.php'";

?>