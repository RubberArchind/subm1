<?php
include 'server.php';

switch ($_REQUEST['a']) {
  case 'add-data':
    // code...
    $query = $hook->prepare("INSERT INTO [dbo].[user] SET username=?,  password=?");
    $run = $query->execute([$_REQUEST['username'],$_REQUEST['password']]);
    break;
}
 ?>
