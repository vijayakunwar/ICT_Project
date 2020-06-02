<?php include('header.php'); ?>
<?php include('db/db_connection.php');

?>

<?php 
    
    function h($string="") {
    return htmlspecialchars($string);
    }
    //make the database connection
    $conn = db_connect();

    //display tutor detail with course html 
    //i used subject ID here becuase my database design let me  not to dispay tutor and student name same time
   
  
?>

<?php

    $sql = "SELECT * from product where product_type= 3 ";


    
    $result = mysqli_query($conn, $sql);
   // $datas = array(); //emplty array to store query result
    //print_r($result);

?>



<?php 

	while($row = mysqli_fetch_assoc($result)) { 

?> 	


<?php  
	
	//echo $row['product_image'];                     
        echo  ' <img src = images/product/'. $row['product_image'].' height = 200 width = 150>'; 
        /*
             class="img-fluid" ---> to maintain aspect ratio
        */
 ?>           


<?php }
                

    mysqli_close($conn);
?>


