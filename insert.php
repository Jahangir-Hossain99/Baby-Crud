<!DOCTYPE html>
<html>
<head>
	<title>Add Paitent</title>
</head>
<body>
	<h1>Add Paitent</h1>
	<form action="add.php" method="post" >
		<label>Paittent Name : </label><br><input  type="text" name="name" placeholder="Paitent Name ">
		<br>
		<br>
		<label>Age : </label><br><input  type="text" name="age" placeholder="Paitent age ">
		<br>
		<br>
		<label>Date of birth : </label><br><input  type="text" name="dob" placeholder="Paitent date of birth ">
		<br>
		<br>
		<label>Symptoms : </label>
		<br>
		<textarea name="symptom" placeholder="write paitent symptoms"></textarea>
		<br>
		<br>
		<label>Section : </label><br><input type="text" name="section" placeholder="Section">
		<br>
		<br>
		<button type="Submit" >Submit</button>

	</form>

</body>
</html>