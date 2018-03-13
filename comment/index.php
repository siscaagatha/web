<?php
// Create database connection using config file
include_once("../conf/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM comments ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Comments</title>
</head>
 
<body>
<a href="add.php">Add New Comments</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Email</th> <th>Comments</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {  
    	echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['comments']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
