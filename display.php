<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
			<th>id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
		</tr>
		</thead>
		
		<tbody>
			<?php 

				require 'select.php';

				$select = new Select();
				$conn = $select->connect();
				$get_select = $select->select();

				if ($get_select->num_rows > 0) {
					# code...
					while ($row = $get_select->fetch_assoc()) {
						# code...
						echo "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['email']."</td>";
					}
				} else {
					# code...
					echo "No results found";
				}


				$conn->close();

			 ?>
		</tbody>
	</table>
</body>
</html>