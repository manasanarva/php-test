<?php include'connect.php';
$sql = "DELETE FROM details WHERE email = 'john@example.com'";
if($conn->query($sql) === TRUE)
{
echo "record deleted successfully";
 }
else{ 
echo"error deleting record: " . $conn->error;
}
$conn->close();
?>