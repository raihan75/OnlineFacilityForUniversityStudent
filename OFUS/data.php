<?php include 'inc/header.php'; ?>
<?php
    if (!isset($_GET['catName']) || $_GET['catName'] == NULL) {
        // echo "<script>window.location = '404.php'; </script>";
      $cat_id = "Books";
      
    }else {
        $cat_id = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['catName']);
    }
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['searchbutton'])) {
      $searchItem = $_POST['search'];

      $searchitem = $post->searchItem($searchItem);          
    }else {
      $searchitem = false;
    }
 ?>

    <!-- Page Content -->
    <div class="container">
      <form method="post" action="search.php">
        <table style="text-align: center;">
          <tr>
            <td><input type="text" name="search"  placeholder="Search"></td>
            <td><input class="btn btn-primary" type="submit" name="searchbutton" value="Search"></td>
          </tr>
        </table>
      </form>
      <!-- Page Heading -->
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>

      <!-- Project One -->
      <?php
          $allPost = $post->getAllPostByCat($cat_id);
          if ($allPost) {
            while ($result = $allPost->fetch_assoc()) {
        ?>
      <div class="row">
        <!-- <div class="col-md-7">
          <a href="details.php?id=<?php echo $result['Item_id']; ?>">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div> -->
        <div class="col-md-5">
          <a href="details.php?id=<?php echo $result['Item_id']; ?>">
            <h3><?php echo $result['Item_name']; ?></h3>
          </a>
          <p>
            <table>
              <tr>
                <td>Price: </td>
                <td><?php echo $result['Item_price']; ?></td>
              </tr>
            </table>
          </p>
          <a class="btn btn-primary" href="details.php?id=<?php echo $result['Item_id']; ?>">View Project</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>
      <?php } } ?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <!-- <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p> -->
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


