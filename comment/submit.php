<html>
<head>
    <title>Comment</title>
</head>
 
<body>
    <?php
 
    // Check If form submitted, insert form data into comment table.
        
        $name = $_POST['name'];
        $title = $_POST['title'];
        $comment = $_POST['comment'];
        
        
        // include database connection file
        include_once("../conf/config.php");
                
        // Insert comment data into table
        $result = mysqli_query($mysqli, "INSERT INTO comment(name,title,comment) VALUES('$name','$title','$comment')");
        
        // Show message when comment added
        echo "Comment added successfully. <a href='../index.php'>back</a>";
        
    ?>
</body>
</html>
