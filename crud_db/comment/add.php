<html>
<head>
	<title>Add Comments</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Comments</td>
				<td><input type="text" name="comments"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];
		
		// include database connection file
		include_once("../conf/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO comments(name,email,comments) VALUES('$name','$email','$comments')");
		
		// Show message when user added
		echo "Comments added successfully. <a href='index.php'>View Comments</a>";
	}
	?>
</body>
</html>