<?php

require_once('baglanti.php');

class Ogrenci{
    
    
    
   public function kayitYap()
    {
       $adi="";
       $soyadi="";
       $fakulte=0;
       $bolum=0;
       $kayit_tarihi="01.01.2018";
       
       $sql="INSERT INTO ogrenci VALUES(?,?,?,?)";
       
       
       $yurut=$db->prepare($sql);
       $sql->execute(array(
       
        $adi,
        $soyadi,
        $fakulte,
        $bolum,
        $kayit_tarihi

       
       ));
       
        $basarili=false;
       
       if($yurut->rowCount>0)
           $basarili=true;
       
       return $basarili;
    }
    
    function kayitSil($id,$adi,$soyadi)
    {
        
        $sql="DELETE FROM ogrenci WHERE id=? OR adi=? OR soyadi=?";
        $yurut=$db->prepare($sql);
        
        $yurut->execute(array(
        
            $id,
            $adi,
            $soyadi
            
        ));
        
          $basarili=false;
       
       if($yurut->rowCount>0)
           $basarili=true;
       
       return $basarili;
        
        
    }
    
    function duzenle($sel_id,$sel_adi,$sel_soyadi)
    {
        
      
        
         $adi="";
       $soyadi="";
       $fakulte=0;
       $bolum=0;
       $kayit_tarihi="01.01.2018";
        
        $sql='UPDATE ogrenci
        
        SET adi=?,soyadi=?,fakulte=?,bolum=?,kayıt_tarihi=?
        
        WHERE " SELECT * FROM WHERE id=? OR adi=? OR soyadi?"
        
        ';
        
        $yurut=$db->prepare($sql);
        $yurut->execute(
        
        array(
        
        $adi,
       $soyadi,
       $fakulte,
       $bolum,
       $kayit_tarihi,
            
         $sel_id,
        $sel_adi,
       $sel_soyadi
         
            
        )
        );
        
        $basarili=false;
        
        if($yurut->rowCount>0)
           $basarili=true;
       
       return $basarili;
        
    }
    
    public function hepsiniGor()
    {
        
        $sql="SELECT * FROM ogrenci";
        $yurut=$db->prepare($sql);
        $yurut->execute();
        
        $ad=array();
        $soyad=array();
        $fakulte=array();
        $bolum=array();
        $kayit_tarihi=array();
       
        foreach($yurut as $yrt)
        {
            $ad=$yrt->adi;
        $soyad=$yrt->soyadi;
        $fakulte=$yrt->fakulte;
        $bolum=$yrt->bolum;
        $kayit_tarihi=$yrt->kayit_tarihi;
            
            
        }
        $basarili=false;
        
        if($yurut->rowCount>0)
           $basarili=true;
       
       return $basarili;
        
    }
    
    public function tekGor($id,$adi,$soyadi)
    {
        
        
         $sql="SELECT * FROM ogrenci WHERE id=? OR adi=? OR soyadi=?";
        $yurut=$db->prepare($sql);
        $yurut->execute();
        
          $ad=array();
        $soyad=array();
        $fakulte=array();
        $bolum=array();
        $kayit_tarihi=array();
       
        foreach($yurut as $yrt)
        {
            $ad=$yrt->adi;
        $soyad=$yrt->soyadi;
        $fakulte=$yrt->fakulte;
        $bolum=$yrt->bolum;
        $kayit_tarihi=$yrt->kayit_tarihi;
            
            
        }
        
        $basarili=false;
        
        if($yurut->rowCount>0)
           $basarili=true;
       
       return $basarili;
        
    }
    

    
}




?>