<?php

require('rest.php');
require('ogrenci.php');


class ogrenciRestHandler extends Rest
{
    
    
    
    
    
    
    function kayitYap()
{
   $ogrenci=new ogrenci();
    $durum=$ogrenci->kayitYap();
    
    if(empty($durum)) {
			$statusCode = 200;
					
		} else {
        $rawData = array('error' => 'Kayıt Basarisiz.');
			$statusCode = 404;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}  else {
         echo "abc";
      }
    
}
function kayitSil($id,$adi,$soyadi)
{
    
      $ogrenci=new ogrenci();
    $durum=$ogrenci->kayitSil();
     if(empty($durum)) {
			$statusCode = 200;
					
		} else {
        $rawData = array('error' => 'Kayıt Silinemedi.');
			$statusCode = 404;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}  else {
         echo "abc";
      }
    
}
function kayitDuzenle($sel_id,$sel_adi,$sel_soyadi)
{
       $ogrenci=new ogrenci();
    $durum=$ogrenci->kayitDuzenle($sel_id,$sel_adi,$sel_soyadi);
     if(empty($durum)) {
			$statusCode = 200;
					
		} else {
        $rawData = array('error' => 'Kayıt Guncellenemedi.');
			$statusCode = 404;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}  else {
         echo "abc";
      }
}
function tumKayitlariGoruntule()
{
    		 $ogrenci=new ogrenci();
		$rawData = $ogrenci->hepsiniGor();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'Personel bulunamadi');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}  else {
         echo "abc";
      }
    
}
function tekKayitGoruntule($id,$adi,$soyadi)
{
    $ogrenci=new ogrenci();
		$rawData = $ogrenci->tekGor($id,$adi,$soyadi);

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'Personel bulunamadi!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} else if(strpos($requestContentType,'text/html') !== false){
			$response = $this->encodeHtml($rawData);
			echo $response;
		} else if(strpos($requestContentType,'application/xml') !== false){
			$response = $this->encodeXml($rawData);
			echo $response;
		}
}





	public function encodeHtml($responseData) {
	
		$htmlResponse = "<table border='1'>";
		foreach($responseData as $key=>$value) {
    			$htmlResponse .= "<tr><td>". $key. "</td><td>". $value. "</td></tr>";
		}
		$htmlResponse .= "</table>";
		return $htmlResponse;		
	}
	
	public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}
	
	public function encodeXml($responseData) {
		$xml = new SimpleXMLElement('<?xml version="1.0"?><person></person>');
		foreach($responseData as $key=>$value) {
			$xml->addChild($key, $value);
		}
		return $xml->asXML();
	}

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}













?>