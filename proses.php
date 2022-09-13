<?php
$target_dir = "img/";
$target_file = $target_dir . rand(10,100).rand(10,100).rand(10,100).rand(10,100).rand(10,100).rand(10,100). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp" && $imageFileType != "") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$judul = $_POST['judul'];
$deskripsi =  $_POST['deskripsi'];
$tanggal =  $_POST['tanggal'];
$status =  $_POST['status'];

echo $target_file;
//cara memberi spasi 
echo "judulnya adalah". " ".  $judul. " ";
echo "deskripsinya adalah". " ".  $deskripsi;

//sambungkan file koneksi
include "koneksi.php";
//masukin data input ke phpmyadmin
$query = "INSERT INTO list_gambar (gambar, judul, deskripsi, tanggal, status) VALUES ('$target_file', '$judul', '$deskripsi', '$tanggal', '$status')";
$result = mysqli_query($con, $query);
//result akan menampung boolean tipe data yes/no
if ($result){
    echo "<br>";
    echo "<script>alert('Blogs are saved Successfuly.');window.location='blog-list.php';</script>";
    
}
else{
    echo"Gagal";
}

?>