<?php

include('header.php');

?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="kayitol.css">
  <div style="margin-top:15%; margin-left:35%;margin-right:37%;">

       
       <input type="button" value="Hepsini Gor" id="hps_gr">
       <input style="background-color:#4CAF50;" type="button" value="Ogrenci Ara" id="ogr_ara">
       
           <form id="ogrenci_ara" style="margin-top:10%;">
            
    Ogrenci Numarası:
      
     <input type="text" placeholder="Ogrenci numarası">
     <br><br>
      Adı:
      <br>
      <input type="text" placeholder="Adi">
        <br><br>
        Soyadı:
        <input type="text" placeholder="Soyadi">  
       <br><br>
       <input style="background-color:gray;" type="submit" value="Kayıt Goruntule">
            
        </form>
       
   
    
    </div>
    

<script>
$(document).ready(function(){
  
    $("#ogrenci_ara").hide();
    
    $("#ogr_ara").click(function(){
        $("#ogrenci_ara").show();
        $("#hps_gr").hide();
        $("#ogr_ara").hide();
    });
});
</script>


<?php

include('footer.php');


?>