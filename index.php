<?php
include "config.php";

if (isset($_POST['no_kp'])) {

    $id = $_POST['id'];
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $jantina= $_POST['jantina'];
    $no_hp= $_POST['no_hp'];

    $sql = "INSERT INTO pekerja (id, nama_pekerja, no_kp, jantina, no_hp)
    VALUES ('$id', '$nama_pekerja', '$no_kp', '$jantina', '$no_hp')";

    $conn= mysqli_connect($sname, $unmae, $password, $db_name);
    $hasil = mysqli_query($conn, $sql);

    if ($hasil) {
        echo "<script>alert('Berjaya Tambah')
        window.location='index.php'</script>";
       
     } else{
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
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="shadow"><p>ANISHOLDINGS.SDN.BHD</p>
<button type="button" class="btn btn-success"><a href="add.php"> Add </a></button> 
</div>



    <h3>SENARAI PEKERJA</h3>
    <center>
        <table border="table 1">
           <tr>
                <th scope="col1">ID </th>
                <th scope="col2">NAMA PEKERJA</th>
                <th scope="col3">NO KP</th>
                <th scope="col4">NO HP</th>
                <th scope="col5">JANTINA</th>
           
</tr>
            <?php
            $conn = mysqli_connect($sname, $unmae, $password, $db_name);
            $sql= "SELECT * FROM pekerja ORDER BY no_kp";
            $data= mysqli_query($conn, $sql);
            $id= 1;
            while ($pekerja = mysqli_fetch_array($data)){
            ?>
            <tr>
               <td><?php echo $pekerja ['id']; ?></td>
               <td><?php echo $pekerja ['nama_pekerja']; ?></td>
               <td><?php echo $pekerja ['no_kp']; ?></td>
               <td><?php echo $pekerja ['no_hp']; ?></td>
               <td><?php echo $pekerja ['jantina']; ?></td>
             
               <td><button type="button" class="btn btn-danger"><a href="delete.php?no_kp=<?php echo $pekerja['no_kp']; ?>">Delete</a> </button>
               <button type="button" class="btn btn-info"><a href="update.php">Update</a> </button>     
            </td>
            </tr>
           <?php $id = $id + 1;
        }  
        ?></td>
        </table>
        <button id="add"><a href="add.php" >add</a></button>
    </center>
</body>
</html>
