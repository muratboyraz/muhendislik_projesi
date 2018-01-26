<?php

include('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="kayitol.css">
    <div style="margin-top:15%; margin-left:35%;margin-right:37%;">
        
        <h5>Kaydı duzenlenecek ogrencinin numarasi, adı veya soyadını giriniz:</h5>
        <form id="kyt_dz_gt">
            
            
    <input type="text" placeholder="Ogrenci numarası">
     <br><br>
      <input type="text" placeholder="Adi">
        <br><br>
        <input type="text" placeholder="Soyadi">  
       <br><br>
       <input id="kyt_dzn_gt" type="submit" value="Kayıt Duzenlemeye Gıt">
            
        </form>
    
        
    </div>
    
    
    
</body>
</html>













<?php 

include('footer.php');

?>