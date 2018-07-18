<?php
include("connection.php");
$query="SELECT * FROM INSERTED ";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>
			display
		</title>
	</head>
	<body>
		<form action="display1.php" method="POST">
			<table>
					<tr>
						<th>name</th>
						<th>email</th>
						<th>mobile</th>
						<th>id</th>
					</tr>
	<?php

				while($result=mysqli_fetch_assoc($data))
			{
				echo"
						<tr>
							<td><input type='text' value='".$result['name']."'></td>
							<td><input type='text' value='".$result['email']."'></td>
							<td><input type='text' value='".$result['mobile']."'></td>
							<td><input type='text' value='".$result['id']."'></td>
							<td><a href='delete.php?id=$result[id] &name=$result[name] &email= $result[email] &mobile=$result[mobile]'>delete</a></td>
							
							</tr>
						";
			}
}
else
{
	echo"nothing to display"."<br>";
}
?>
	</table>
	</form>
	<button type="button" onClick="location.href='display.php'">PREVIOUS ENTRIES</button>
	</body>
	</html>