<?php
include('config.php');
if(isset($_POST['no_kp'])) {  

    $id = $_POST['id'];
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $no_hp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];


    $sql = "UPDATE user_pekerja SET id ='$id', nama_pekerja = '$nama_pekerja', no_hp = '$no_hp', jantina = '$jantina'  WHERE  no_kp = '$no_kp'";
    $hasil = mysqli_query($conn, $sql);
    if ($hasil) {
        echo "<script>alert('Berjaya ditambah kemaskini')
        window.location='index.php'</script>";
    }else {
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
       
    }
}
    $sql = "SELECT * FROM user_pekerja";
    $hasil = mysqli_query($conn, $sql);
    while ($user_pekerja = mysqli_fetch_array($hasil)) {

        $id = $user_pekerja['id'];
        $nama_pekerja = $user_pekerja['nama_pekerja'];
        $no_kp = $user_pekerja['no_kp'];
        $jantina = $user_pekerja['jantina'];
        $no_hp = $user_pekerja ['no_hp'];
    }
?>


<!-- HTML Bermula -->
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="shadow"><button type="button" class="btn btn-success"><a href="index.php"> BACK </a></button></p>

    <form method="POST">
        <fieldset>

        <center>
        <p>UPDATE MAKLUMAT <?php echo $nama_pekerja;?> </p>
        <form action="update.php" method="post">

        ID <br>
        <input type="text" name="id" value = '<?php echo $id;?>'>
        <br>

        IC <br>
        <input type="text" name="no_kp" value = '<?php echo $no_kp;?>'>
        <br>

        NAMA<br>
        <input type="text" name="nama_pekerja" value = '<?php echo $nama_pekerja;?>'>
        <br>

        HP<br>
        <input type="text" name="no_hp" value = '<?php echo $no_hp;?>'>
        <br>


        JANTINA <br>
            <select class="form-select" aria-label="select" >
            <option selected>--Sila Pilih--</option>
            <option value='<?php echo $jantina;?>'>Perempuan</option>
            <option value='<?php echo $jantina;?>'>Lelaki</option>

        </select><br>
                
                    <button type="submit">Update</button>
                    <button type="reset">Clear</button><br><br>
                </form>
        </fieldset>
    </body>
</html>
