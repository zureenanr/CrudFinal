<?php
include "config.php";

if (isset($_POST['add'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO masuk (username, password)
    VALUES ('$username', '$password')";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
</body>
</html>



<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="add"><a href="index.php">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>