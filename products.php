
<?php
session_start();
error_reporting(1);

include('db/db_connection.php'); 
$con = db_connect();

if(isset($_GET['action']) && $_GET['action']=="add"){
  $id=intval($_GET['id']);
   header('location:my-cart.php');
  
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity']++;
  }else{
    $sql_p="SELECT * FROM products WHERE id={$id}";
    $query_p=mysqli_query($con,$sql_p);
    if(mysqli_num_rows($query_p)!=0){
      $row_p=mysqli_fetch_array($query_p);
      $_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
      header('location:my-cart.php');
    }else{
      $message="Product ID is invalid";
    }
  }
}

?>
<?php include('includes/profile-header.php');?>
<?php include('header.php');?>



<?php 
    
    function h($string="") {
    return htmlspecialchars($string);
    }
    //make the database connection
    $con = db_connect();
?>



<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="display-4">We have boxes of small, medium and large size</h1>
    <p class="lead">Feel free to contact us if need customized boxes</p>
    <hr class="my-4">
    <p>We are local farmer freind and promoter.</p>
    <p class="lead">
       <a class="btn btn-danger btn-lg" href="#" role="button"> Delivery Area</a>
       <a class="btn btn-primary btn-lg" href="#" role="button"> Contact US</a>

    </p>
  </div>
  
</div>



<?php

    $sql1 = "SELECT * from products where productCategory= 1 ";
    $sql2 = "SELECT * from products where productCategory= 2 ";
    $sql3 = "SELECT * from products where productCategory= 3 ";

    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);
    $result3 = mysqli_query($con, $sql3);
   // $datas = array(); //emplty array to store query result
    //print_r($result);

?>

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<dir class="conainter feature-text">
  <h1>Fruit Boxes</h1>
  
</dir>



<div class="container-fluid">
  <div class="row-fluid row align-items-center justify-content-center">

    <?php 

      while($row1 = mysqli_fetch_assoc($result1)) { 

    ?> 


    <div class="cell col-sm-6 col-md-4 col-lg-3">
      <div class="card  embed-responsive-16by9">
        
        <a href="product-detail.php?pid=<?php echo htmlentities($row1['id']);?>">
          <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row1['productImage'])?>" 
        alt="Card image cap">

        </a>

          <a href="product-detail.php?pid=<?php echo htmlentities($row1['id']);?>" class="btn btn-primary"><i class="fa fa-info-circle "></i> Product Detail</a>


        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row1['productName'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row1['productPrice'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row1['productDescription'])?> </p>
         


          <a href="product-detail.php?page=product&action=add&id=<?php echo $row1['id']; ?>" class="btn btn-danger"><i class="fa fa-shopping-cart "></i> ADD TO CART</a>
          

        </div>
      </div>
    </div> 

    <?php } ?>
  </div>
</div>

<hr>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

<dir class="conainter feature-text">
  <h1>Vegetable Boxes</h1>
  
</dir>

<div class="container-fluid">
  <div class="row-fluid row align-items-center justify-content-center">

    <?php 
      
      // $datas = array(); //emplty array to store query result
      //print_r($result);
      while($row2 = mysqli_fetch_assoc($result2)) { 

    ?> 
    <div class="cell col-sm-6 col-md-4 col-lg-3">
      <div class="card  embed-responsive-16by9">
        
        <a href="product-detail.php?pid=<?php echo htmlentities($row2['id']);?>">
          <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row2['productImage'])?>" 
        alt="Card image cap">
        </a>
        <a href="product-detail.php?pid=<?php echo htmlentities($row2['id']);?>" class="btn btn-primary"><i class="fa fa-info-circle "></i> Product Detail</a>

        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row2['productName'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row2['productPrice'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row2['productDescription'])?> </p>
          <a href="product-detail.php?page=product&action=add&id=<?php echo $row2['id']; ?>" class="btn btn-danger"><i class="fa fa-shopping-cart "></i> ADD TO CART</a>
        </div>
      </div>
    </div> 

    <?php }  ?>
  </div>
</div>

<hr>

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<dir class="conainter feature-text">
  <h1>Custmized Fruit and Vegetable Boxes</h1>
  
</dir>

<div class="container-fluid">
  <div class="row-fluid row align-items-center justify-content-center">

    <?php 

      while($row3 = mysqli_fetch_assoc($result3)) { 

    ?> 


    <div class="cell col-sm-6 col-md-4 col-lg-3">
      <div class="card  embed-responsive-16by9">
        
        <a href="product-detail.php?pid=<?php echo htmlentities($row3['id']);?>">
          <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row3['productImage'])?>" 
        alt="Card image cap">
        </a>

        <a href="product-detail.php?pid=<?php echo htmlentities($row3['id']);?>" class="btn btn-primary"><i class="fa fa-info-circle "></i> Product Detail</a>

        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row3['productName'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row3['productPrice'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row3['productDescription'])?> </p>
          


          <a href="product-detail.php?page=product&action=add&id=<?php echo $row3['id']; ?>" class="btn btn-danger"><i class="fa fa-shopping-cart "></i> ADD TO CART</a>

          
        </div>
      </div>
    </div> 

    <?php }
                
      
    ?>
    

  </div>
</div>

<hr>

<?php  mysqli_close($con); ?>

<?php include('footer.php'); ?>