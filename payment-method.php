<?php 
session_start();
error_reporting(0);

include('db/db_connection.php'); 
$con = db_connect();

if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {

		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');

	}
?>



<?php include('includes/profile-header.php');?>
<?php include('header.php');?>


<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
					<h2>Choose Payment Method</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	

	

		<!-- panel-body  -->
	    <div class="panel-body">
		    <form name="payment" method="post">
			    <input type="radio" name="paymethod" value="COD" checked="checked"> COD
			     <input type="radio" name="paymethod" value="Internet Banking"> Internet Banking
			     <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card <br /><br />
			     <input type="submit" value="submit" name="submit" class="btn btn-primary">
	    	

	    	</form>		
		</div>
		<!-- panel-body  -->

	
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<?php echo include('includes/brands-slider.php');?>
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	
</div><!-- /.container -->
</div><!-- /.body-content -->
<?php include('footer.php');?>
	
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>
<?php } ?>