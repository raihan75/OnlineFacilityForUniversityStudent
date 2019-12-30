<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ofus";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname); 


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$gmail = $_POST['gmail'];
$university = $_POST['university'];
$varsityID = $_POST['varsityID'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO myaccount(User_name, User_gmail, User_university, User_varsityID, User_phone, User_password) VALUES ('$name','$gmail','$university', '$varsityID','$phone','$password')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><center>New record created successfully</center></h1>?";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


