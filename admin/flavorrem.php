<?php
$servername = "localhost";
$username = "vaporadmin";
$password = "0?R2%)I3r_kL";
$dbname = "vaportrails";
$flavorname = $_POST["remflavorname"];
$table = $_POST["table"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM  ".$table." 
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