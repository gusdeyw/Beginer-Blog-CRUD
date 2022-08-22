<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>tanggal</title>
    <!-- <link rel="stylesheet" href="css/output.css"> -->
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 40%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
        background-color: salmon;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        font-size: 12px;
    }
    </style>
</head>
<body>
    <center><h1>data tanggal</h1></center>
   
    <br/>
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal yang AKTIF dan kurang dari current date</th>
         
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
    //   $query = "SELECT tanggal FROM list_gambar where status = 'aktif'";
      $query = "SELECT tanggal FROM list_gambar where tanggal <= CURDATE() && status = 'aktif'";
      $result = mysqli_query($con, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($con)." - ".mysqli_error($con));
      }

      //buat perulangan untuk element tabel dari data blog
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['tanggal']; ?></td>
    </tr>

    <?php
        $no++; //untuk nomor urut terus bertambah 1
        }
    ?>
    </tbody>
    </table>
  </body>
</html>