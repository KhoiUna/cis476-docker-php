<?php session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Administrator Menu
        <ul>
            <li><a href="insert.php">Create</a></li>
            <li><a href="select.php">Read</a></li>
            <li>Update</li>
            <li>Delete</li>
        </ul>
          
    </body>
</html>
