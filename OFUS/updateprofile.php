<?php include 'inc/header.php'; ?>


<?php
   $user_id = $_SESSION["user_id"];
   if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
   	$user_name = $_POST['user_name'];
   	$user_gmail = $_POST['user_gmail'];
   	$user_university = $_POST['user_university'];
   	$user_varsityID = $_POST['user_varsityID'];
   	$user_phone = $_POST['user_phone'];

    $updateUser = $user->updateAdmin($user_id, $user_name, $user_gmail, $user_university, $user_varsityID, $user_phone);
          
	}
	

?>

	<div class="container">
		<form method="POST" action="">
	    <table class="table table-striped table-dark">
		  <thead>
		    <tr>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$getUser = $user->getByAdminId($user_id);
		          if ($getUser) {
		            while ($row = $getUser->fetch_assoc()) {
		  	 ?>
		    <tr>
		      <th scope="row"></th>
		      <td>User Name</td>
		      <td><input type="text" name="user_name" value="<?php echo $row['User_name']; ?>" placeholder="Enter Username"></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>Email: </td>
		      <td><input type="text" name="user_gmail" value="<?php echo $row['User_gmail']; ?>" placeholder="Enter Email"></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>University</td>
		      <td><input type="text" name="user_university" value="<?php echo $row['User_university']; ?>" placeholder="Enter University"></td>		      
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>University ID</td>
		      <td><input type="text" name="user_varsityID" value="<?php echo $row['User_varsityID']; ?>" placeholder="Enter University ID"></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>Phone: </td>
		      <td><input type="text" name="user_phone" value="<?php echo $row['User_phone']; ?>" placeholder="Enter Phone"></td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td></td>
		      <td><input class="btn btn-primary" type="submit" name="submit" value="Submit"></td>
		    </tr>
		    <?php } } ?>
		  </tbody>
		</table>
		</form>
	</div>

<?php include 'inc/footer.php'; ?>