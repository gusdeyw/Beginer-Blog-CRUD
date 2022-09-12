<?php 
    
    include "koneksi.php";
    // if(isset($_GET['id_blog'])){
    //     $id = $_GET['id_blog']; 
    //     }else{
    //     $id = "<br>id tidak diset di Method GET ";
    //     }
    
    $query = "SELECT * FROM list_gambar WHERE id_blog = '$_GET[kode]'";
    $result= mysqli_query($con,$query);
    // $query=mysqli_query($con,"select * from list_gambar where id_blog='$_GET[kode]'");
    $row=mysqli_fetch_array($result); 
    $gambar= $row['gambar'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: '#mytextarea',
    plugins: [
      'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
      'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
      'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
    ],
    toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
      'alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
  });
</script>
    <title>Document</title>
</head>
<body>
    <h3>Form EDIT</h3>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nomor</td>
                <td><input hidden type="text" name=id_blog value="<?=$row['id_blog']?>" ></td>
            </tr>
            <tr>
                <td width="130">Hasil Gambar</td>
                <td><img src="<?= $gambar?>" class="rounded-lg" style="height: 200px;"></td>
           </tr>
           <tr>
            <td>Hidden</td>
           <td><input type="text" name="filehidden" class="w-max mt-1 py-1 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md" value="<?php echo $row['gambar'] ?>" >
           </td>
           </tr>
           <tr>
           <td width="130">ganti Gambar</td>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
           </tr>
            <!-- <tr>
                <td>ubah gambar</td>
                <td>
                <input type="file" name="fileToUpload" id="fileToUpload" action="proses.php">
                </td>
            </tr> -->
            <tr>
                <td>judul</td>
                <td><input type="text" name="judul" value="<?=$row['judul']?>"></td>
                
            </tr>
            <tr>
                
                <td>Deskripsi</td>
                <td>
                <textarea name="deskripsi" id="mytextarea" cols="30" rows="10" value="<?php echo $row['deskripsi'] ?>"></textarea>
                </td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td><input type="datetime-local" name="tanggal" value="<?php echo $row['tanggal'] ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="radio" name="status" value="aktif" <?php if($row['status'] == 'aktif'){echo "checked";} ?>>
                    <label for="aktif">aktif</label>
                    <input type="radio" name="status" value="nonaktif" <?php if($row['status'] == 'nonaktif'){echo "checked";} ?>>
                    <label for="nonaktif">nonaktif</label>
                </td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>
