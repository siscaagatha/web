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
				<td>Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr> 
				<td>Comment</td>
				<td><textarea rows="2" cols="50" name="comment"></textarea></td>
			</tr>
			<tr> 
				<td>Foto</td>
				<td><input type="text" name="foto"></td>
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
		$name = $_POST['name'];
		$title = $_POST['title'];
		$comment = $_POST['comment'];
		$foto = $_POST['foto'];
		
		// include database connection file
		include_once("../conf/config.php");
				
		// Insert comment data into table
		$result = mysqli_query($mysqli, "INSERT INTO comments(name,title,comment,foto) VALUES('$name','$title','$comment','$foto')");
		
		// Show message when comment added
		echo "Comment added successfully. <a href='index.php'>View Comments</a>";
	}
	?>
</body>
</html>