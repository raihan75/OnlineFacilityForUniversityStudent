<?php include 'inc/header.php'; ?>
<?php
   $user_id = $_SESSION["user_id"];
   if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
    $Item_name = $_POST['Item_name'];
    $Item_category = $_POST['Item_category'];
    $Item_date = $_POST['Item_date'];
    $Item_price = $_POST['Item_price'];
    $Item_description = $_POST['Item_description'];

    $insertItem = $post->insertItem($user_id, $Item_name, $Item_category, $Item_date, $Item_price, $Item_description);
          
  }
?>
          <div class="container">
            <div class="card-header">
              
              <h1><center>Product Insert By User</center></h1>
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
                  <tr>
                    <td><h2>Product Name</h2></td>
                    <td><input type="text" name="Item_name" placeholder="Item Name"></td>
                  </tr>
                  <tr>
                    <td><h2>Category</h2></td>
                    <td><input type="text" name="Item_category" placeholder="Item Category"></td>
                  </tr>
                  <tr>
                    <td><h2>Item Date</h2></td>
                    <td><input type="text" name="Item_date" placeholder="Item Date"></td>
                  </tr>
                  <tr>
                    <td><h2>Price</h2></td>
                    <td><input type="text" name="Item_price" placeholder="Item price"></td>
                  </tr>
                  <tr>
                    <td><h2>Description</h2></td>
                    <td><textarea name="Item_description" placeholder="Item description"></textarea></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="submit" placeholder="Insert Item"></td>
                  </tr>
                </tbody>
              </table>
              </form>
            </div>
          </div>

<?php include 'inc/footer.php'; ?>