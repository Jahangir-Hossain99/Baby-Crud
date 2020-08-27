<?php 
$conn = new  mysqli('localhost','root','','hospital paitent');
$sql="SELECT * FROM paitent";
$result=$conn->query($sql);




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>paitent</title>
</head>
<body>

<h1>Paitent Information</h1>
<a href="insert.php" class="btn"  >Add Paitent</a>
<br>
<br>

	<table border=5  cellpadding="5"  >
		<thead>
			<tr>
				<th>ID</th>
				<th>Paitent Name</th>
				<th>Age</th>
				<th>Date of birth</th>
				<th>Symptoms</th>
				<th>Section</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=$result->fetch_assoc()) {?>
				<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['Paitent Name']; ?></td>
					<td><?php echo $row['Age']; ?></td>
					<td><?php echo $row['Dateofbirth']; ?></td>
					<td><?php echo $row['Symptom']; ?></td>
					<td><?php echo $row['Section']; ?></td>
					<td>
						<a href="view.php?ID=<?php echo$row['ID']; ?>"> View</a>
						<a href="update.php?ID=<?php echo$row['ID']; ?>"> Update</a>
							
						<a href="delete.php?ID=<?php echo$row['ID']; ?>"> Delete</a>
						


					</td>
				</tr>
			<?php } ?>
				
			

		</tbody>
	</table>

</body>
</html>