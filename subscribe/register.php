<html>
<head>
	<title>Subscribe</title>
</head>
 
<body>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	
		$email= $_POST['name'];
		
		
		// include database connection file
		include_once("../conf/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO subscribe(email) VALUES('$email')");
		
		// Show message when user added
		echo "Subscribe added successfully. <a href='../index.php'>Back</a>";
	}
	?>
</body>
</html>