<?php
include 'server.php';

switch ($_REQUEST['a']) {
  case 'add-data':
    // code...
    $query = "INSERT INTO [dbo].[user] (username,password) VALUES  (?,?)";
    $params= array(&$_POST['username'],&$_POST['password']);             
    $stmt = sqlsrv_query($conn,$query,$params);
    if($stmt){
      echo "success";
    }else {
      echo "failed";
    }
    break;
}
 ?>
