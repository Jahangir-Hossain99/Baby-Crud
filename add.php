<?php

$name=$_POST['name'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$symptom=$_POST['symptom'];
$section=$_POST['section'];
$conn = new  mysqli('localhost','root','','hospital paitent');
$sql="INSERT INTO paitent VALUES (NULL,'$name',$age,'$dob','$symptom','$section')";
if ($conn->query($sql)) {
	echo "Added Successfully";
} else{
	echo "Failed to add";
}