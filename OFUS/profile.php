<?php include 'inc/header.php'; ?>
<?php
  $conn = mysqli_connect("localhost", "root", "", "ofus");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
	$user_id = $_SESSION["user_id"];
	$sql = "SELECT * FROM myaccount
			WHERE User_id = '$user_id'";

	$result = $conn->query($sql);

?>

	<div class="container">
	    <table class="table table-striped table-dark">
		  <thead>
		    <tr>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		if ($result->num_rows > 0) {
		  			while($row = $result->fetch_assoc()) {
		  	 ?>
		    <tr>
		      <th scope="row"></th>
		      <td>User Name</td>
		      <td><?php echo $row['User_name']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>Email: </td>
		      <td><?php echo $row['User_gmail']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>University</td>
		      <td><?php echo $row['User_university']; ?></td>		      
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>University ID</td>
		      <td><?php echo $row['User_varsityID']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>Phone: </td>
		      <td><?php echo $row['User_phone']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td></td>
		      <td><a class="btn btn-primary" href="updateprofile.php">Update Profile</a></td>
		    </tr>
		    <?php } } ?>
		  </tbody>
		</table>
	</div>

    <script  src="js/index.js"></script>
    <script  src="bootstrap/js/bootstrap.min.js"></script>
    <script  src="bootstrap/js/jquery.min.js"></script>
</body>
</html>