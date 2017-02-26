<?php
$servername = "192.168.0.12";
$username = "admin";
$password = "itsasecret";
$dbname = "vaportrails";
$flavorname = $_POST["remflavorname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM flavors 
WHERE name='".$flavorname."';";

if ($conn->query($sql) === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: Administration.php"); /* Redirect browser */
exit();
?>