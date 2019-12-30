<?php



session_start();


if(isset($_POST['submit'])){
	
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
	
	
	$gmail=mysqli_real_escape_string($con,$_POST['gmail']);
	
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	
	
	
		
		$sql="SELECT * FROM users WHERE user_uid='$gmail' OR user_email='$password'";
		 //echo $sql;
		//return;
		
		$result=mysqli_query($con,$sql);
		$resultCheck=mysqli_num_rows($result);
		
		/*if($result)
			echo "result get";
		
		echo"uid ". $uid . "<br>";
		echo "pwd ". $pwd . "$<br>";
		
		echo "result check ". $resultCheck . "<br>";
		return;*/
		
		
		if($resultCheck<1){
			
		
			
			header("Location: ../index.php?login=resulterror");
			exit();
	
		}else{
			
			if($row=mysqli_fetch_assoc($result)){
				//echo $row['user_uid'];
				
				//De-hashing the password
				
				
					
					
					
				
				
					//login the user here
					$_SESSION['gmail']=$row['user_gmail'];
					$_SESSION['password']=$row['user_password'];
					
					header("Location:login.php?login=success");
					//header("Location: ../main.php?login=success");
					
					
					exit();
					
					
					
				
				
				
				
			}
			
		}
		
		
	
	
	
	
}else{
	header("Location:login.php?login=error");
	exit();
	
	
	
}


?>