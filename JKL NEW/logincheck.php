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
		$uname = $_REQUEST['uname'];
		$pass= $_REQUEST['pass'];
		
		
		$sql = "select name from registration where name='$uname' and password='$pass'";
		
		$result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>" 
            			."<a href='Register.html'  target='main' > Register</a>";
        }     
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
