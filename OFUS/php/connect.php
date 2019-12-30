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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

	$sql = "SELECT * FROM `myaccount` WHERE 1";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    // output data of each row
	echo "<table >
  <tr>
    <th>id</th>
    <th>Lastname</th> 
    <th>mail</th>";
    while($row = $result->fetch_assoc()) {
		
        echo "<tr>
    <td>" . $row["User_id"]. "</td>
    <td> " . $row["User_name"]. " </td>
    <td>" . $row["User_gmail"]. "<br>";
		
    }
	echo " </tr>
</table> ";
} else {
    echo "0 results";
}
$conn->close();

?>
