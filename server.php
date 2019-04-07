<?php
$serverName = "tcp:dbzero.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "submone",
    "UID" => "zero",
    "PWD" => "AlphA21!@"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);  

?>
