<?php
  $conn = mysqli_connect("localhost", "root", "", "ofus");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $gmail = $_POST['gmail'];
	  $password = $_POST['password'];
	  
   $sql = "select * from myaccount where User_gmail= '$gmail' and User_password = '$password'";
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      session_start();
      $_SESSION["is_login"] = true;
      $_SESSION["user_id"] = $row['User_id'];
      $_SESSION["user_name"] = $row['User_name'];
      echo "Login Success";
    }
    header("Location: ../index.php");
   }
   else{
	   echo "<h1><center>login failed</center></h1>";
   }
   
  }

?>