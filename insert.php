<?php
include("connection.php");
?>
<!doctype html>
<html>
<head>
	<title>insert</title>
	</head>
	<body>
		<form action="insert.php" method="POST" id="demo">
			story:<textarea rows="4" cols="50" name="story" id="story"></textarea><br><br>

			name:<input type="text" name="name" value="" id="name"><br><br>

			age:<input type="number" name="age" value="" id="age" ><br><br>

			phone:<input type="number" name="phone" value="" id="phone" ><br><br>

			email:<input type="email" name="email" value="" id="email" ><br><br>

			address:<textarea  rows="4" cols="50" name="address" value="" id="address" ></textarea><br><br>

			<input type="submit" name="submit" value="submit" >
		</form>

	
<?php
		       if($_POST['submit'])
		       {    
		       		$story=$_POST['story'];

		           	$name=$_POST['name'];

		       		$age=$_POST['age'];
		       	
		       		$phone=$_POST['phone'];

		       		$email=$_POST['email'];

		       		$address=$_POST['address'];
                     // echo $story;die;
		       			
	 $query="INSERT INTO aboutme (story,name,age,phone,email,address) VALUES('$story','$name',$age,$phone,'$email','$address')";
		       			 
		       		    $data=mysqli_query($con,$query);
		       			if($data)
		       			{
		       				echo"data inserted successfully";
		       			}
		       			else
		       			{
		       				echo"not inserted";
		                }
		       }
		       ?>
</body>
</html>
