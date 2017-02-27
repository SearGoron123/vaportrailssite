<?php
$servername = "192.168.0.12";
$username = "admin";
$password = "itsasecret";
$dbname = "vaportrails";
$flavorname = $_POST["flavorname"];
$table = $_POST["table"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ".$table." (name)
VALUES ('".$flavorname."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: Administration.php"); /* Redirect browser */
exit();
?>