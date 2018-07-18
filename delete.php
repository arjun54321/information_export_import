<?php
include("connection.php");
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
// $query="INSERT INTO STUDENT (name,email,mobile,id) VALUES('$name','$email','$mobile','$id')";
// $data=mysqli_query($con,$query);
// if($data)
// {
// 	echo"data inserted"."<br>";
// }
// else
// {
// 	echo"not inserted"."<br>";
// }


$query="DELETE FROM INSERTED WHERE ID='$id'";
//echo"$query";
$data=mysqli_query($con,$query);


$update="update student set flag=0 where id=$id";
//echo"$query";
$update1=mysqli_query($con,$update);
//if($data)
if($data)
{
	echo"your data is deleted"."<br>";
}
else
{
	echo"not deleted"."<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
		<button type="button" onClick="location.href='display.php'">PREVIOUS ENTRIES</button>
		<button type="button" onClick="location.href='display2.php'">NEW ENTRIES</button>
	</body>
</html>
