<?php
$id=$_GET['ID'];
$conn = new  mysqli('localhost','root','','hospital paitent');
$sql="DELETE FROM paitent WHERE ID=$id";
if ($conn->query($sql)) {
	echo "Deleted";
}else
{
echo "Failed";
}