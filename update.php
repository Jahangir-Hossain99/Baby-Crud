<?php
$id=$_GET['ID'];
$conn = new  mysqli('localhost','root','','hospital paitent');
$sql="SELECT * FROM paitent WHERE ID = $id";
$result=$conn->query($sql);
$paitent=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update page</title>
</head>
<body>
	<form action="changes.php?ID=<?php echo $paitent['ID'] ?>" method='post'  >
		<label>Paitent Name : </label>
		<input type="text" value="<?php echo$paitent['Paitent Name'] ?>" name="name"><br><br>
		<label>Paitent Age : </label>
		<input type="text" value="<?php echo $paitent['Age'] ?>" name="age"><br><br>
		<label>Date of birth : </label>
		<input type="text" value="<?php echo $paitent['Dateofbirth'] ?>" name="dob"><br><br>
		<label>Symptom : </label>
		<input type="text" value="<?php echo $paitent['Symptom'] ?>" name="symptom"><br><br>
		<label>Section : </label>
		<input type="text" value="<?php echo $paitent['Section'] ?>" name="section"><br><br>
		<button type="Submit">Submit</button>
	

</form>


</body>
</html>
