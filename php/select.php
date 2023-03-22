<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>Display items table here.</p>
        <?php   
        $servername = "database";
        $username = "root";
        $password = "password";
        $dbname = "officemin";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT brand, product, price FROM items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Brand: " . $row["brand"] . " - Product: " . $row["product"] . "- Price: " . $row["price"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>       
        <br/>

        <a href="index.php">Main Menu</a>
    </body>
</html>
