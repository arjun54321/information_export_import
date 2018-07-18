<?php
include("connection.php");
error_reporting(0);
?>
<?php
	
	if(isset($_POST['submit']))
    {
    	 $i=0;
    	 $flag=1;

	    for($i=0;$i<10;$i++)
	    {
	    	if(isset($_POST['check'.$i.'']))
		{

			 $name=$_POST['name'][$i];
	         $email=$_POST['email'][$i];
	         $mobile=$_POST['mobile'][$i];
	         $id=$_POST['id'][$i];

             $query="SELECT * FROM STUDENT ";
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
}
else
{
	echo"nothing to display";
}
?>
	</table>
	<input type="submit" name="submit" value="submit">
	</form>
	</body>
	</html>