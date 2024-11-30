<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "travel");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$gender = $_REQUEST['gender'];
		$phone = $_REQUEST['phone'];
		$mail = $_REQUEST['mail'];
		$state = $_REQUEST['state'];
		$pass= $_REQUEST['pass'];
		$conpass= $_REQUEST['conpass'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO registration VALUES ('$name',
			'$gender','$phone','$mail','$state','$pass','$conpass')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>$name,Registered successfully.</h3>";
				
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
