<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:dbzero.database.windows.net,1433; Database = submone", "zero", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
