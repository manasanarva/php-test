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

$sql = "INSERT INTO details (name,phone,email)
VALUES ('John','12','john@example.com');";
$sql .= "INSERT INTO details (name,phone,email)
VALUES ('Mary','11','mary@example.com');";
$sql .= "INSERT INTO details (name,phone,email)
VALUES ('Julie','13','julie@example.com');";

if ($conn->multi_query($sql) == TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>