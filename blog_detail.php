<?php 
    
    include "koneksi.php";
    // if(isset($_GET['id_blog'])){
    //     $id = $_GET['id_blog']; 
    //     }else{
    //     $id = "<br>id tidak diset di Method GET ";
    //     }
    
    $query = "SELECT * FROM list_gambar WHERE id_blog = '$_GET[id]'";
    $result= mysqli_query($con,$query);
    // $query=mysqli_query($con,"select * from list_gambar where id_blog='$_GET[kode]'");
    $row=mysqli_fetch_array($result); 
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
    <!-- container besar utk gambar -->
    <div class="w-10/12 my-8 mx-auto ">
        
        <!-- <div class="bg-center bg-cover block w-full h-screen" style="background-image: url('img/amDbJ2qB_700w_0.jpg');"></div> -->
        <img src="<?= $row['gambar']?>" class="bg-center bg-cover block w-full h-screen" alt="">
    </div>

    <!-- container besar utk text -->
    
    <div class="w-10/12 min-h-screen mb-5 mx-auto bg-white">
        
        <h1 class="font-bold text-3xl mb-5"><?= $row['judul']?></h1> 
        <p><?= $row['deskripsi']?></p>
        <!-- <ul class="list-decimal">
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
            <li>
                <h2 class="text-lg font-semibold">Ubud Monkey Forest Ubud</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perferendis veritatis culpa quisquam enim laborum totam veniam temporibus, consequatur placeat? Delectus inventore ex, nam fugit quaerat corporis illum? Quos, consequatur!</p>
            </li>
        </ul> -->
    </div>

    
</body>
</html>