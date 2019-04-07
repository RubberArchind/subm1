<?php
include 'server.php';

switch ($_REQUEST['a']) {
  case 'add-data':
    // code...
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = $hook->prepare("INSERT INTO [dbo].[user] (username,password) VALUES username=?,  password=?");
    $run = $query->execute($user,$pass);
    if($run){
      echo "success";
    }else {
      echo "failed";
    }
    break;
}
 ?>
