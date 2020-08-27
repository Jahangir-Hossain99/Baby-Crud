<?php
$id = $_GET['ID'];
$conn = new  mysqli('localhost','root','','hospital paitent');
$sql ="SELECT * FROM paitent WHERE ID = $id";
$result = $conn->query($sql);
$paitent = $result->fetch_assoc();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Viewing</title>
</head>
<body>
<table border="5" cellpadding="5" >
	<tr>
		<th>ID</th>
		<td><?php echo $paitent['ID']; ?></td>
	</tr>
	<tr>
		<th>
			Name
		</th>
		<td><?php echo $paitent['Paitent Name']; ?></td>
	</tr>
	<tr>
		<th>Age</th>
		<td><?php echo $paitent['Age']; ?></td>
	</tr>
	<tr>
		<th>Date of birth</th>
		<td><?php echo $paitent['Dateofbirth']; ?></td>
	</tr>
	<tr>
		<th>Symptom</th>
		<td><?php echo $paitent['Symptom']; ?></td>
	</tr><tr>
		<th>Section</th>
		<td><?php echo $paitent['Section']; ?></td>
	</tr>
</table>
</body>
</html>