<?php 
//session_start();

?>


<ul class="nav nav-pills nav-fill">

	<li class="nav-item">
	    <a class="nav-link" href="contact.php"><i class="fa fa-envelope fa-lg">admin@eatfruit.com</i> </a>
	  </li>
  	<li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-phone fa-lg">0414040287</i></a>
  	</li>

	<?php if(strlen($_SESSION['login']))
    {   ?>

	  <li class="nav-item">
	    <a class="nav-link active" href="#">Welcome - <?php echo htmlentities($_SESSION['username']);?></a>
	  </li>

	  <?php } ?>


	  
	  
	  <li class="nav-item">
	    <a class="nav-link" href="my-cart.php">My Cart</a>
	  </li>
  


		<?php if(strlen($_SESSION['login'])==0)
		    {   ?>
		<li class="nav-item" >
			<a class="nav-link" href="login.php">Login</a></li>
		<?php }
		else{ ?>

			<li class="nav-item">
	    <a class="nav-link" href="my-account.php">My Account</a>
	  </li>

		<li class="nav-item" > 
			<a class="nav-link" href="logout.php">Logout</a></li>
			<?php } ?>	
</ul>



  
  
