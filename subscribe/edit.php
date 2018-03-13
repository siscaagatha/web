<?php
// include database connection file
include_once("../conf/config.php");
 
// Check if form is submitted for comment update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$email=$_POST['email'];
		
	// update comment data
	$result = mysqli_query($mysqli, "UPDATE subscribe SET email='$email' WHERE id=$id");
	
	// Redirect to homepage to display updated comment in list
	header("Location: index.php");
}
?>
<?php
// Display selected comment data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech comment data based on id
$result = mysqli_query($mysqli, "SELECT * FROM subscribe WHERE id=$id");
 
while($comment_data = mysqli_fetch_array($result))
{
	$email = $comment_data['email'];
}
?>
<html>
<head>	
	<title>Edit subscribe Data</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	
	<form name="update_comment" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>