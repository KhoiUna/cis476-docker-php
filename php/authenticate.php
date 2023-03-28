<?php
session_start();

// TODO: PHP Form Validation (see the example under Validate Form Data With PHP)
include_once './validate.php';

// FIXME: get the username/password from the POST superglobal
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = test_input($_POST["uname"]);
    $pwd = test_input($_POST["pwd"]);
}

// FIXME: 
// select password from users where username = '$uname'
// if no rows are returned (the username must not be in the table) 
//     show page below
// else 
//     compare $pwd to the hashed password from the users table
//     using password_validate($pwd, $db_hashed_pwd)
//     if $pwd is good:
//         put the username into the session with a the key: 'user'
//         redirect browser to admin_menu.php
//     else show page below (don't give Mallory any clues)
//
// WARNING!
// Don't confuse the username (root) and password (empty string) for
// the MySQL database with the username/password from the form!
$servername = "database"; // instead of localhost like we used to
$username = "root";
$password = "password"; // set earlier in MYSQL_ROOT_PASSWORD
$dbname = "officemin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password from users where username = '$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($pwd, $row["password"])) {
        $_SESSION ['user'] = $pwd;
        header("Location: admin_menu.php");
    }
    else {
        error_log("login failure user-$uname bad password");
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.

        <a href="index.php">Homepage</a>
    </body>
</html>