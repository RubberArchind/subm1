<?php
include 'server.php';

switch ($_REQUEST['a']) {
  case 'add-data':
    // code...
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = mysqli_query($conn,"INSERT INTO [dbo].[user] (username,password) VALUES  ('$user','$pass')");
    if($query){
      echo "success";
    }else {
      echo "failed";
    }
    break;
}
 ?>
