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
	//echo($result);

	$html = new simple_html_dom();
	$html -> load($result);
	// to get links of actual image source used
	foreach($html->find('img') as $element)
       echo $element->src . '<br>';	
		
   // to get prodcut tittle  
   // it output span element content i.e price as inner context of class card-title
   foreach($html->find('.card-title') as $element)
       echo $element->innertext . '<br>';
   // to get product description   
	foreach($html->find('.card-text') as $element)
       echo $element->innertext . '<br>';
	curl_close($curl);
?>

<?php include('footer.php'); ?>