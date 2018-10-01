<?php
$conn=mysqli_connect("localhost","root","","tables");
if(!$conn){
die("connection failed: " .mysqli_connect_error());
}
else
echo "connected";
?>