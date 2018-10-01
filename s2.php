<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tables";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error());
} 

$sql = "SELECT name, phone, email FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - phone: " . $row["phone"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT name, phone, email FROM details WHERE name='Mary' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - phone: " . $row["phone"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>