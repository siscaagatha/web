<?php
// include database connection file
include_once("../conf/config.php");
 
// Get id from URL to delete that comment
$id = $_GET['id'];
 
// Delete comment row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM subscribe WHERE id=$id");
 
// After delete redirect to Home, so that latest comment list will be displayed.
header("Location:index.php");
?>
