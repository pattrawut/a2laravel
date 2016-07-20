<?php
header('Content-Type: text/xml');

$dom = new DOMDocument();

$response  = $dom->createElement('response');
$dom->appendChild($response);

$transactions  = $dom->createElement('transactions');
$response->appendChild($transactions);


foreach($rows as $row)
{

	$transno = $dom->createElement('transno'); 
	$transnoText = $dom->createTextNode($row['transno']); 
	$transno->appendChild($transnoText); 


	$uid= $dom->createElement('uid'); 
	$uidText = $dom->createTextNode($row['uid']); 
	$uid->appendChild($uidText); 


	$date= $dom->createElement('date'); 
	$dateText = $dom->createTextNode($row['date']); 
	$date->appendChild($dateText); 


	$sellerno= $dom->createElement('sellerno'); 
	$sellernoText = $dom->createTextNode($row['sellerno']); 
	$sellerno->appendChild($sellernoText); 
	

	$product= $dom->createElement('product'); 
	$productText = $dom->createTextNode($row['product']); 
	$product->appendChild($productText); 



	$price= $dom->createElement('price'); 
	$priceText = $dom->createTextNode($row['price']); 
	$price->appendChild($priceText); 	



	$number= $dom->createElement('number'); 
	$numberText = $dom->createTextNode($row['number']); 
	$number->appendChild($numberText); 	

	
	$transaction = $dom->createElement('transaction');
		$transaction->appendChild($transno);
		$transaction->appendChild($uid);
		$transaction->appendChild($date);
		$transaction->appendChild($sellerno);
		$transaction->appendChild($product);
		$transaction->appendChild($price);
		$transaction->appendChild($number);

	//Append the rest of subelements under person

	// append <person> as a child of <people>
	$transactions->appendChild($transaction);
}	

$xmlString = $dom->saveXML();
// output the XML string

echo $xmlString;



?>