<?php 
$data = simplexml_load_file("biscuit.xml");
// var_dump($data);
foreach ($data as $key => $line) {
	$sql = "INSERT INTO biscuits(id,name,saveur,entremet) VALUES(".
		$line->N_x00B0_.',"'.$line->PRODUIT.'",';

	$saveur = "{'";
	foreach ($line->SAVEUR as $value) {
		$saveur .= $value->Value."','";
	}

	$sql .= substr($saveur ,0,strlen($saveur)-2).'}","';
	
	die($sql);
}
?>