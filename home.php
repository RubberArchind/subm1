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
			$query =mysqli_query($con,"select*from [dbo].[user]");

			while ($data=mysqli_fetch_array($query)) {
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
