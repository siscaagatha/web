<?php
// include database connection file
include_once("../conf/config.php");
 
// Check if form is submitted for comment update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];	
	$title=$_POST['title'];
	$comment=$_POST['comment'];
		
	// update comment data
	$result = mysqli_query($mysqli, "UPDATE comments SET name='$name',title='$title',comment='$comment' WHERE id=$id");
	
	// Redirect to homepage to display updated comment in list
	header("Location: index.php");
}
?>
<?php
// Display selected comment data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech comment data based on id
$result = mysqli_query($mysqli, "SELECT * FROM comments WHERE id=$id");
 
while($comment_data = mysqli_fetch_array($result))
{
	$name = $comment_data['name'];
	$title = $comment_data['title'];
	$comment = $comment_data['comment'];
}
?>
<html>
<head>	
	<title>Edit comment Data</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	
	<form name="update_comment" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Title</td>
				<td><input type="text" name="title" value=<?php echo $title;?>></td>
			</tr>
			<tr> 
				<td>Comment</td>			
				<td><textarea rows="2" cols="50" name="comment"><?php echo $comment;?></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>