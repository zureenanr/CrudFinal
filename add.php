<?php
include ('config.php');

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $jantina= $_POST['jantina'];
    $no_hp= $_POST['no_hp'];

    $sql = "INSERT INTO pekerja (id, nama_pekerja, no_kp, jantina, no_hp)
    VALUES ('$id', '$nama_pekerja', '$no_kp', '$jantina', '$no_hp')";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $hasil = mysqli_query($conn, $sql);

    if ($hasil) {
        echo "<script>alert('Berjaya Tambah')
        window.location='index.php'</script>";
        
       
      }else{
        echo "<script>alert('Gagal Tambah!')
        window.location='add.php'</script>";
    }   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    
</head>

<body>
<div class="shadow"><button type="button" class="btn btn-success"><a href="index.php"> BACK </a></button></p>
<h4>ADD MAKLUMAT</h4>
    <center>
    <form method="POST">
        
    <fieldset>

    ID <br>
    <input type="text" name="id" id = "id">
    <br>

    IC <br>
    <input type="text" name="no_kp" id = "no_kp">
    <br>

    NAMA<br>
    <input type="text" name="nama_pekerja" id = "nama_pekerja">
    <br>

    HP<br>
    <input type="text" name="no_hp" id = "no_hp">
    <br>

    JANTINA <br>
    <select class="form-select" name="jantina" id="jantina" aria-label="select">
        <option selected>--Sila Pilih--</option>
        <option id="perempuan" value="Perempuan">Perempuan</option>
        <option id="lelaki" value="Lelaki">Lelaki</option>
    </select>
    <br><br>

        <button name="submit">Add</a></button>
        <button type="reset">Clear</button>
    </form>
    </center>
    
</body>
</html>
