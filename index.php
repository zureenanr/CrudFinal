<?php
include ('config.php');
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
            
            $sql= "SELECT * FROM user_pekerja ORDER BY id";
            $data= mysqli_query($conn, $sql);
            $id= 1;
            while ($user_pekerja = mysqli_fetch_array($data)){
            ?>
            <tr>
               <td><?php echo $user_pekerja ['id']; ?></td>
               <td><?php echo $user_pekerja ['nama_pekerja']; ?></td>
               <td><?php echo $user_pekerja ['no_kp']; ?></td>
               <td><?php echo $user_pekerja ['no_hp']; ?></td>
               <td><?php echo $user_pekerja ['jantina']; ?></td>
             
               <td>
                <button type="button" class="btn btn-danger"><a href="delete.php?no_kp=<?php echo $user_pekerja['no_kp']; ?>">Delete</a> </button>
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
