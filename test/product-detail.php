
<?php
session_start();
error_reporting(0);

//echo session_id();
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

$pid=intval($_GET['pid']);


?>

<?php include('includes/profile-header.php');?>
<?php include('header.php');?>









<!-- ------------------------------------------------------------------------------ -->



  <div class='container'>
    
      
      <?php 
      $ret=mysqli_query($con,"select * from products where id='$pid'");
      while($row=mysqli_fetch_array($ret))
      {

      ?>
     
        <div class="row  ">
          
            <div class="single-product-gallery-item" >
                    
              <img  src="images/product/<?php echo htmlentities($row['productImage']);?>"  width="450" height="300" alt="">
              
            </div>

            <div class='col-sm-6 col-md-7 product-info-block'>
              <div class="product-info">
                <h1 class="name"><?php echo htmlentities($row['productName']);?></h1>
                  <?php $rt=mysqli_query($con,"select * from productreviews where productId='$pid'");
                  $num=mysqli_num_rows($rt);
                  {
                  ?>    
                
<?php } ?>
              <div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="stock-box">
                      <span class="label">Availability :</span>
                    </div>  
                  </div>
                  <div class="col-sm-9">
                    <div class="stock-box">
                      <span class="value"><?php echo htmlentities($row['productAvailability']);?></span>
                    </div>  
                  </div>
                </div><!-- /.row -->  
              </div>



              <div class="stock-container info-container m-t-10">
                <div class="row">
                  
                  <div class="col-sm-9">
                    <div class="stock-box">
                      <span class="value"><?php echo htmlentities($row['productCompany']);?></span>
                    </div>  
                  </div>
                </div><!-- /.row -->  
              </div>


              <div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="stock-box">
                      <span class="label">Shipping Charge :</span>
                    </div>  
                  </div>
                  <div class="col-sm-9">
                    <div class="stock-box">
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
                    </div>  
                  </div>
                </div><!-- /.row -->  
              </div>

              
                <div class="row">
                  <div class="col-sm-6">
                    <div class="price-box">
                      <span class="price">$ <?php echo htmlentities($row['productPrice']);?></span>
                      
                    </div>
                  </div>
                
              </div><!-- /.price-container -->

              <div class="quantity-container info-container">
                <div class="row">
                  
                  

                  <div class="col-sm-2">
                    <span class="label">Qty :</span>
                  </div>
                  
                  <div class="col-sm-2">
                    
                                
                        <input type="text" value="1">
                      
                  </div>

                 

                  
                </div><!-- /.row -->
                <div class="row">
                 <div class="col-sm-7">
                    <a href="product-detail.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                  </div>
                  </div>
              </div><!-- /.quantity-container -->

             

  
      
     
    </div><!-- /.item -->
    <?php } ?>
  
    
</div><!-- /.home-owl-carousel -->



<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
      
</div>
</div>
</div>





<!---------------------------------------------------------------------------------------->


<?php include('footer.php'); ?>