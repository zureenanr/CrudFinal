<?php
include('config.php');
if(isset($_GET ['no_kp'])){
    $no_kp = $_GET ['no_kp'];
}
$samb = mysqli_connect($sname, $unmae, $password, $db_name);
$sql = "DELETE FROM pekerja WHERE no_kp = '$no_kp'";
$hasil = mysqli_query($samb, $sql);
 if ($hasil == TRUE)
 {
 echo "<script>alert('Berjaya padam rekod')</script>";
 echo "<script>window.location='index.php'</script>";
 }
    else  
{
echo "<script>alert('Tidak berjaya padam rekod')</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DELETE!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Adakah anda pasti untuk menghapuskan rekod ini?</p>
        <h5>Sila Pastikan dengan betul!</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><a href="delete.php?no_kp=<?php echo $pekerja['no_kp']; ?>">YES DELETE!</a> </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
      </div>
    </div>
  </div>
</div>






