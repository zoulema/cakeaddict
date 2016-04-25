<?php 
$lines  =  simplexml_load_file('/Users/user/Documents/produits.xml');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("error_reporting", E_ALL);

// var_dump($lines->PRODUCT->CATEGORIE);die();
foreach ($lines as $key => $line) {
	$sql = 'INSERT INTO products(id,reference,name,description,temps_u,page,prix,flavor_id,shape,category_id,remarque) VALUES('.
	$line->id.',"'.
	$line->REFERENCE.$line->PAGE.'","'.
	$line->NAME.'","'.
	$line->DESCRIPTION.'","'.
	$line->TPS_FABRICATION.'","'.
	$line->PAGE.'","'.
	$line->PRIX.'","';
	$saveur = "{'";
	foreach ($line->SAVEUR as $value) {
		$saveur .= $value->Value."','";
	}

	$sql .= substr($saveur ,0,strlen($saveur)-2).'}","';
	
	$shape = "{'";
	foreach ($line->FORME as $value) {
		$shape .= $value->Value."','";
	}

	$sql .= substr($shape ,0,strlen($shape)-2).'}","';

	$category = "{'";
	foreach ($line->CATEGORIE as $key=>$value) {
		$category .= $value->Value."','";
	}

	$sql .= substr($category ,0,strlen($category)-2).'}",';

	$sql .= '"'.$line->REMARQUE.'");';

	echo $sql."<br><br>";
}

 ?>