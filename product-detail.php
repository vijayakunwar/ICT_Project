
<?php
session_start();
error_reporting(0);

//echo session_id();
include('db/db_connection.php'); 
$con = db_connect();

if(isset($_GET['action']) && $_GET['action']=="add"){
  $id=intval($_GET['id']);
   
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity']++;

     header('location:my-cart.php');

  }else{
    $sql_p="SELECT * FROM products WHERE id={$id}";
    $query_p=mysqli_query($con,$sql_p);
    if(mysqli_num_rows($query_p)!=0){
      $row_p=mysqli_fetch_array($query_p);

          //quantity => 1 ------- add one item at a time

      $_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);

      header('location:my-cart.php');
    }else{
      $message="Product ID is invalid";
    }
  }
}

$pid=intval($_GET['pid']);


?>

<?php include('includes/profile-header.php');?>
<?php include('header.php');?>









<!-- ------------------------------------------------------------------------------ -->
<dir class="conainter feature-text">
  <h1>Product Detail</h1>
  
</dir>


  <div class='container-fluid'>
    <div class="row  align-items-center justify-content-center">
    
      
      <?php 
      $ret=mysqli_query($con,"select * from products where id='$pid'");
      while($row=mysqli_fetch_array($ret))
      {

      ?>
     
          <div class="cell col-sm-12 col-md-5 col-lg-5">
            <img  src="images/product/<?php echo htmlentities($row['productImage']);?>"  width="450" height="300" alt="">
          </div>
                    
              
          <div class="cell col-sm-12 col-md-5 col-lg-5">

            <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h3 class="name"><?php echo htmlentities($row['productName']);?></h3>
            </li>

            <?php $rt=mysqli_query($con,"select * from productreviews where productId='$pid'");
                  $num=mysqli_num_rows($rt);
                  {
                  ?>    
                
<?php } ?>

            <li class="list-group-item">
                <span class="label">Availability :</span> 
                <span class="value"><?php echo htmlentities($row['productAvailability']);?></span>
            </li>
            <li class="list-group-item">
                <span class="label">Delivery charge :</span> 
                <span class="value"><?php if($row['shippingCharge']==0)
                        {
                          echo "Free";
                        }
                        else
                        {
                          echo htmlentities($row['shippingCharge']);
                        }

                        ?>
                          
                </span>
            </li>
            <li class="list-group-item">
              <span class="label">Unit Price :</span>
              <span class="price">$ <?php echo htmlentities($row['productPrice']);?></span>
            </li>
            <li class="list-group-item">
              <span class="label">Qty :</span>
              <input type="text" value="1">
            </li>
            <li class="list-group-item">

              <a href="product-detail.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>

            </li>
          </ul>

          </div>
            
                
                  
              
                   



              
                   
   
    <?php } ?>
  
    
  </div> <!-- row-fluid -->
</div> <!-- container-fluid -->





<!---------------------------------------------------------------------------------------->


<?php include('footer.php'); ?>