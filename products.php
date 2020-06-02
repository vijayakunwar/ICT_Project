<?php include('header.php'); ?>
<?php include('db/db_connection.php'); ?>


<?php 
    
    function h($string="") {
    return htmlspecialchars($string);
    }
    //make the database connection
    $conn = db_connect();
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

    $sql1 = "SELECT * from product where product_type= 1 ";
    $sql2 = "SELECT * from product where product_type= 2 ";
    $sql3 = "SELECT * from product where product_type= 3 ";

    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
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
        
        <a href="product-detail.php?pid=<?php echo htmlentities($row1['product_ID']);?>">
          <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row1['product_image'])?>" 
        alt="Card image cap">

        </a>
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row1['product_title'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row1['product_price'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row1['product_description'])?> </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
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
      $sql2 = "SELECT * from product where product_type= 2 ";
      $result2 = mysqli_query($conn, $sql2);
      // $datas = array(); //emplty array to store query result
      //print_r($result);
      while($row2 = mysqli_fetch_assoc($result2)) { 

    ?> 
    <div class="cell col-sm-6 col-md-4 col-lg-3">
      <div class="card  embed-responsive-16by9">
        
        <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row2['product_image'])?>" 
        alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row2['product_title'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row2['product_price'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row2['product_description'])?> </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
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
        
        <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row3['product_image'])?>" 
        alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row3['product_title'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row3['product_price'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row3['product_description'])?> </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div> 

    <?php }
                
      
    ?>
    

  </div>
</div>

<hr>

<?php  mysqli_close($conn); ?>

<?php include('footer.php'); ?>