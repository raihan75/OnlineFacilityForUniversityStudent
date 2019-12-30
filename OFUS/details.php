<?php include 'inc/header.php'; ?>
<?php

     $conn = mysqli_connect("localhost", "root", "", "ofus");
    if(!$conn){
        echo ("Error Connection:".mysqli_connect_error());
    }
    $user_id = $_SESSION["user_id"];
    $sql = "SELECT * FROM myaccount
      WHERE User_id = '$user_id'";

    $resulti = $conn->query($sql);
    

    if (!isset($_GET['id']) || $_GET['id'] == NULL) {
        echo "<script>window.location = '404.php'; </script>";
    }else {
        $id = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['id']);
    }
 ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- <div class="col-lg-3">
          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
          <?php
              $allPost = $post->getAllPost();
              if ($allPost) {
                while ($result= $allPost->fetch_assoc()) {
            ?>
            <a href="#" class="list-group-item active">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
            <?php } } ?>
          </div>
        </div> -->
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
        <?php
          $getPostById = $post->getByPostId($id);
          if ($getPostById) {
            while ($result= $getPostById->fetch_assoc()) {
        ?>
          <div class="card mt-4">
            <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
            <div class="card-body">
              <h3 class="card-title"><?php echo $result['Item_name']; ?></h3>
              <h4>$ <?php echo $result['Item_price']; ?></h4>
              <p class="card-text"><?php echo $result['Item_description']; ?></p>
              <!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars -->
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Specification
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>Category</b></td>
                    <td><b><?php echo $result['Item_category']; ?></b></td>
                  </tr>
                  <tr>
                    <td><b>Date</b></td>
                    <td><b><?php echo $result['Item_date']; ?></b></td>
                  </tr>
                  <tr>
                    <td><b>Price</b></td>
                    <td><b><?php echo $result['Item_price']; ?></b></td>
                  </tr>
                  <tr>
                    <td><b>Phone no.</b></td>
                   <?php 
                    if ($resulti->num_rows > 0) {
                      while($row = $resulti->fetch_assoc()) {
                    ?>
                    <td><b><?php echo $row['User_phone']; ?></b></td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->
        <?php } } ?>

      </div>

    </div>
    <!-- /.container -->


<?php include 'inc/footer.php'; ?>