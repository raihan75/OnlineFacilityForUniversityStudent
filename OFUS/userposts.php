<?php include 'inc/header.php'; ?>
<?php
   $user_id = $_SESSION["user_id"];
   if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $deletePost = $post->deleteByPostId($item_id);
  }
?>
          <div class="container">
            <div class="card-header">
              Product By User
            </div>
            <div class="card-body">
            	<a class="btn btn-warning" href="insertitem.php">Insert Post</a>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Item Name</th>
                    <th>Item Category</th>
                    <th>Item date</th>
                    <th>Item price</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                	<?php
			        	$user_id = $_SESSION["user_id"];
			          $getPostByUser = $post->getAllPostByUser($user_id);
			          if ($getPostByUser) {
			            while ($result= $getPostByUser->fetch_assoc()) {
			        ?>
                  <tr>
                    <td><?php echo $result['Item_name']; ?></td>
                    <td><?php echo $result['Item_category']; ?></td>
                    <td><?php echo $result['Item_date']; ?></td>
                    <td><?php echo $result['Item_price']; ?></td>
                    <td><a href="updateitem.php?item_id=<?php echo $result['Item_id']; ?>">Update</a></td>
                    <td><a href="?item_id=<?php echo $result['Item_id']; ?>">Delete</a></td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
            </div>
          </div>

<?php include 'inc/footer.php'; ?>