<?php include('header.php'); ?>

<?php	
	include "simple-html-dom/simple_html_dom.php";	
	// to display images of product form google shop result
	$curl = curl_init();
	//helpful when we need manual search keyword for set url
	//$search_string = "php+scraping";	
	$url = 'http://eatfruit.com.au/products.php';
	// Set the url
	curl_setopt($curl,CURLOPT_URL,$url);
	//for secure url
	//curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
	// Set the result output to be a string.
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($curl);
	$info = curl_getinfo($curl);
	//print_r($info);
	//echo($result);
	//print_r($result);
	$html = new simple_html_dom();
	$html -> load($result);
	//ABSOLUTE PATH  for image 	
   $img = [];	
   foreach($html->find('img') as $var)  { 
   	//store all images absolute path in the array
   	$img[] = 'http://eatfruit.com.au/'.$var->src;
  // echo 'http://eatfruit.com.au/'.$var->src.'<br>';
	}
	//To print images from array   	
   	for($i =0; $i < count($img); $i++){
		echo "<div style='display: inline-block; margin: 10 0 0 0;'>";
		echo "<img src='$img[$i]'height =200px widht = 200px ><br/>";
		//echo 'http://eatfruit.com.au/'.$var->src.'<br>';
		echo "</div>";
	}	
   // to get prodcut tittle  
   // it output span element content i.e price as inner context of class card-title
   foreach($html->find('.card-title') as $element){
       echo $element->innertext . '<br>';
   }
   // to get product description   
	foreach($html->find('.card-text') as $element){
       echo $element->innertext . '<br>';
	}
	curl_close($curl);
?>
<?php include('footer.php'); ?>

