<!DOCTYPE html>
<html>
<head>
	<title>its work</title>
</head>
<body>
<div class="main">
	<a href="something.html"><button>Tambah+</button></a>
	<table border="1">
		<tr>
			<th>No.</th><th>Username</th><th>Password</th>
		</tr>
			<?php
		include 'server.php';
			$no=1;
			
      $sql = "SELECT * FROM [dbo].[user] ORDER BY username";
      $stmt = sqlsrv_query($conn, $sql);
 	if($stmt!=false){
		while($data = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
		echo "
		<tr>
		<td>".$no."</td>
		<td>".$data['username']."</td>
		<td>".$data['password']."</td>
		</tr>
		";
		}
	}else{
		echo"query failed";
	}
	
			 ?>

	</table>
</div>
</body>
</html>
