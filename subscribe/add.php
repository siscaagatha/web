<html>
<head>
	<title>Add Subscribe</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into comment table.
	if(isset($_POST['Submit'])) {
		$email = $_POST['email'];
		
		// include database connection file
		include_once("../conf/config.php");
				
		// Insert comment data into table
		$result = mysqli_query($mysqli, "INSERT INTO subscribe(name,email) VALUES('$name','$email')");
		
		// Show message when comment added
		echo "Subscribe added successfully. <a href='index.php'>View Subscribe</a>";
	}
	?>
</body>
</html>