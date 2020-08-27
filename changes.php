<?php
$id=$_GET['ID'];
$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$symptom=$_POST['symptom'];
$section=$_POST['section'];
$conn = new  mysqli('localhost','root','','hospital paitent');
$sql="UPDATE `paitent` 
SET `Paitent Name`='$name',`Age`= $age,`Dateofbirth`='$dob',`Symptom`= '$symptom' ,`Section`='$section' 
WHERE ID= $id ";


if ($conn->query($sql)) {
	echo "Updated Successfully";
}
else{
	echo "Failed to update";
}



?>