
<?php
session_start();
error_reporting(0);

include('db/db_connection.php'); 
$con = db_connect();

if(isset($_GET['action']) && $_GET['action']=="add"){
  $id=intval($_GET['id']);
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity']++;
  }else{
    $sql_p="SELECT * FROM products WHERE id={$id}";
    $query_p=mysqli_query($con,$sql_p);
    if(mysqli_num_rows($query_p)!=0){
      $row_p=mysqli_fetch_array($query_p);
      $_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
      header('location:index.php');
    }else{
      $message="Product ID is invalid";
    }
  }
}

?>




<?php include('includes/profile-header.php');?>
<?php include('header.php');?>


    <div class="container-fluid">
      <div class="jumbotron">
        <h2 class="display-6">Seasonla fresh fruit and vegetbale from Asutrlaian farm.</h2>
        <p class="lead">We promise the fresh and quick delivery</p>
        <hr class="my-4">
        <p>We are in touch with farm and farmer.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="products.php" role="button"> Check our boxex</a>
        </p>
      </div>
      
    </div>
      

    <div class="container-fluid  ">
      
        
        <!-- make child div content to the centered vertically alligned-->
        <!-- row align-items-center justify-content-center--->
          <div class="row-fluid  row align-items-center justify-content-center">
            <div class=" cell  col-sm-12 col-md-5 col-lg-5 category-display-1" > 
              <h1 class="display-5">Fruit Basket</h1>
              <p class="lead">Just arived , Fresh from the farm</p>
              <p>April to July picked</p>
              <hr class="my-4">
              <p>Delivers to your door. Please feel free to explore our range of products and contact us. Eat Fresh Eat Fruits</p>
              <a class="btn btn-primary btn-lg" href="products.php" role="button">View Products</a>
              <a class="btn btn-success btn-lg" href="products.php" role="button">Order Online</a>
          
            </div>
             <div class=" cell col-sm-12 col-md-5 col-lg-5 category-display-2" > 
              <h1 class="display-5">Vegetable Basket</h1>
              <p class="lead">Just arived , Fresh from the farm</p>
              <p>April to July picked</p>
              <hr class="my-4">
              <p>Delivers to your door. Please feel free to explore our range of products and contact us. Eat Fresh Eat Vegtables</p>
              <a class="btn btn-primary btn-lg" href="products.php" role="button">View Products</a>
              <a class="btn btn-success btn-lg" href="products.php" role="button">Order Online</a>
          
            </div>
             
          </div>
          <hr class="my-4">
    </div> 


    <dir class="conainter feature-text">
      <h1>Featured Products</h1>
      
    </dir>

    <div class="container-fluid">
      <div class="row-fluid row align-items-center justify-content-center">

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card  embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/pear.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pears</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div> 

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/apple.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Apple</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div> 
        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <!-- <div class="card embed-responsive embed-responsive-16by9"> -->
          <div class="card  embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/cantaloupe.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Cantaloupe</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>


        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/blueberry.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Blue berry</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/orange.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Orange</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/pineapple.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pineapple</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/redberry.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Red berry</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/pomegrant.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pomegrant</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>

        <div class="cell col-sm-6 col-md-4 col-lg-3">
          <div class="card embed-responsive-16by9">
            <img class="card-img-top embed-responsive-item" src="images/fruits/strawberry.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Straberry</h5>
              <p class="card-text">Austrlaian Farm Product</p>
              <a href="products.php" class="btn btn-primary">View Products</a>
            </div>
          </div>
        </div>




      </div>
    </div>

  <?php include('footer.php');?>