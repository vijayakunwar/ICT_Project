
<?php include('header.php'); ?>
<?php include('db/db_connection.php'); ?>
<h1>
	<?php
		echo $_GET['pid'];
	?>
</h1>

<?php 
	$product_id = $_GET['pid'];
    //make the database connection
    $conn = db_connect();

?>
<?php

    $sql = "SELECT * from product where product_ID= '$product_id'";
    

    $result = mysqli_query($conn, $sql);
    
   // $datas = array(); //emplty array to store query result
    //print_r($result);

?>

<div class="container-fluid">
  <div class="row-fluid row align-items-center justify-content-center">

<?php 

      while($row = mysqli_fetch_assoc($result)) { 

    ?> 
	<dir class="conainter feature-text">
	  <h1><?php echo htmlentities($row['product_title']);?></h1>
	  <h2><?php echo htmlentities($row['product_description']);?></h3>
	  
	</dir>

 <!--   <div class="cell col-sm-6 col-md-4 col-lg-3"> -->
 	<div class="cell col-sm-8 col-md-6 col-lg-6">
      <div class="card  embed-responsive-16by9">
        
        <a href="product-detail.php?pid=<?php echo htmlentities($row['product_ID']);?>">
          <img class="card-img-top embed-responsive-item" 
        src="images/product/<?php echo htmlentities($row['product_image'])?>" 
        alt="Card image cap">

        </a>
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlentities($row['product_title'])?> </h5>
          <h5 class="card-title"> <span>$<?php echo htmlentities($row['product_price'])?>.00</span></h5>
          <p class="card-text"><?php echo htmlentities($row['product_description'])?> </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    </div> 

    <?php } ?>

    </div>
</div>
    <?php  mysqli_close($conn); ?>


<?php include('footer.php'); ?>