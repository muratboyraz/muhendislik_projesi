<?php 

try{
    
   
    $db=new PDO('mysql:host=localhost;dbname=murat_boyraaz','root','');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
}


catch(PDOException $e)
{
    
    echo 'upss something went wrong';
    
}

?>