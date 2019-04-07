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
			$query =sqlsrv_query($con,"select*from user");

			while ($data=sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
				echo "
				<tr>
				<td>$no</td>
				<td>".$data['username']."</td>
				<td>".$data['password']."</td>
				";

				$no++;
			}
			 ?>

	</table>
</div>
</body>
</html>
