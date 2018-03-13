<html>
<head>
	<title>Subscribe</title>
</head>
 
<body>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$email= $_POST['name'];
		$date = $_POST['email'];
		$subscribe_date = $date->getTimestamp();
		
		// include database connection file
		include_once("../conf/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO subscribe(email, subscibe_date) VALUES('$email', 'subscribe_date')");
		
		// Show message when user added
		echo "Subscribe added successfully. <a href='index.php'>Back</a>";
	}
	?>
</body>
</html>