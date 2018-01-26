
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="giris.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="jssor.slider-26.9.0.min.js" type="text/javascript"></script>
</head>
<body >

<ul>
  <li><a class="active" href="giris.php" id="og_kyt_uyg">Ogrenci Kayıt Uygulaması</a></li>
  <li><a id="kyt_yp" href="kayitol.php">Kayıt Yap</a></li>
  <li><a id="kyt_grntle" href="kayitgoruntule.php">Kayıt Goruntule</a></li>
  <li><a id="kyt_sil"href="kayitsil.php">Kayıt Sil</a></li>
  <li><a id="kyt_gncl" href="kayitduzenle.php">Kayıt Guncelle</a></li>
  

</ul>


<script>
$(document).ready(function(){
  
    $("#og_kyt_uyg").click(function(){
        $("#icerik").show();
    });
});
</script>



 <div id="icerik" style="margin-left:25%;padding:1px 16px;height:1000px; ">
      <img src="images/cu_logo.jpg" style="width:300px;; height:150px; margin-left:25%;">
      
     
    <h3 style="margin:25%; color:green;">16 numaralı ogrenci basariyla silindi. Aktif ogrenci sayısı 19 </h3>
     
     
     