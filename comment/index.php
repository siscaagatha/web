<?php
// Create database connection using config file
include_once("../conf/config.php");
 
// Fetch all comments data from database
$result = mysqli_query($mysqli, "SELECT * FROM comments ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New Comments</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Title</th> <th>Comments</th> <th>Foto</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['title']."</td>";
        echo "<td>".$user_data['comment']."</td>"; 
        echo "<td>".$user_data['foto']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>

    <br/>
    <a href="../index.php">Back</a>
</body>
</html>