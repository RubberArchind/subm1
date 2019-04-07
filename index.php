<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="main">
	<a href="proses.php?hl=add-inven"><button>Tambah+</button></a>
	<table border="1">
		<tr>
			<th>No.</th><th>Username</th><th>Password</th>
		</tr>
			<?php
			$no=1;
      $sql = "SELECT * FROM [dbo].[user] ORDER BY username";
      $stmt = sqlsrv_query($conn, $sql);
      if($stmt === false)
      {
      die(print_r(sqlsrv_errors(), true));
		}else{
			while ($data=sqlsrv_fetch_array($stmt) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data['username']."</td>
				<td>".$data['password']."</td>
				";

				$no++;
			}
		}
			 ?>

	</table>
</div>
</body>
</html>
