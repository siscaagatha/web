<html>
<head>
	<title>Subscribe</title>
</head>
 
<body>
	<?php
 
	// Check If form submitted, insert form data into comment table.
		
		$email = $_POST['email'];
		
		
		// include database connection file
		include_once("../conf/config.php");
				
		// Insert comment data into table
		$result = mysqli_query($mysqli, "INSERT INTO subscribe(email) VALUES('$email')");
		
		// Show message when comment added
		echo "Subscribe added successfully. <a href='../index.php'>back</a>";
		
	?>
</body>
</html>