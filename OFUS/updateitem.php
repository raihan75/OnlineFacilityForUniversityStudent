<?php include 'inc/header.php'; ?>
<?php
    $item_id = $_GET['item_id'];
    $user_id = $_SESSION["user_id"];
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
    $Item_name = $_POST['Item_name'];
    $Item_category = $_POST['Item_category'];
    $Item_date = $_POST['Item_date'];
    $Item_price = $_POST['Item_price'];
    $Item_description = $_POST['Item_description'];

    $updateItem = $post->updateItem($item_id, $Item_name, $Item_category, $Item_date, $Item_price, $Item_description);
          
  }
?>
          <div class="container">
            <div class="card-header">
              Product Update By User
            </div>
            <div class="card-body">
              <form method="post" action="">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    if (isset($updateItem)) {
                      //echo $updateItem;
                    }
                    $getPost = $post->getByPostId($item_id);
                        if ($getPost) {
                          while ($result = $getPost->fetch_assoc()) {
                   ?>
                  <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="Item_name" placeholder="Item Name" value="<?php echo $result['Item_name']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Category</td>
                    <td><input type="text" name="Item_category" placeholder="Item Category" value="<?php echo $result['Item_category']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Item Date</td>
                    <td><input type="text" name="Item_date" placeholder="Item Date" value="<?php echo $result['Item_date']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Price</td>
                    <td><input type="text" name="Item_price" placeholder="Item Price" value="<?php echo $result['Item_price']; ?>"></td>
                  </tr>
                  <tr>
                    <td>Description</td>
                    <td><textarea name="Item_description" placeholder="Item Description"><?php echo $result['Item_description']; ?></textarea></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="submit" placeholder="Insert Item"></td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
              </form>
            </div>
          </div>

<?php include 'inc/footer.php'; ?>