<?php
include("connection.php");
$query="SELECT * FROM STUDENT where flag=0";
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
						<th>checkbox</th>
					</tr>
	<?php

				$i=0;

				while($result=mysqli_fetch_assoc($data))
			{
				// echo"
				// 		<tr>
				// 			<td>".$result['name']."</td>
				// 			<td>".$result['email']."</td>
				// 			<td>".$result['mobile']."</td>
				// 			<td>".$result['id']."</td>
				// 			<td><input type='checkbox' name='check".$i."' value='".$result['mobile']."'>select</td>

				// 			</tr>
				// 		";
				// 		$i++;

				echo"
						<tr>
							<td><input type='text' name='name[]' value='".$result['name']."'></td>
							<td><input type='text' name='email[]' value='".$result['email']."'></td>
							<td><input type='text' name='mobile[]' value='".$result['mobile']."'></td>
							<td><input type='text' name='id[]' value='".$result['id']."'></td>
							<td><input type='checkbox' name='check".$i."' >select</td>

							</tr>
						";
						$i++;
			}
			//echo"<input type='submit' name='submit' value='submit'>";
}
else
{
	echo"nothing to display";
}

// if(isset($_POST['submit']))
// {
// 	echo"hello";
// 		if(isset($_POST['check']))
// 		{
// 			echo"world";
// 		}
// 		else
// 		{
// 			die;
// 		}
// }
// else
// {
// 	die;
// }
?>
	</table>
	<input type="submit" name="submit" value="submit">
	</form>
	</body>
	</html>