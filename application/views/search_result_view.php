<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>ARAMA SONUCU</title>  
</head>  
  
<body>  
  
    <h1>ARAMA SONUCU :</h1>  
      
    <?php  
    $total = count($results);  
      
    if($total == 0)  
    {  
        echo '<p>Kayıt Bulunamadı.</p>';  
    }  
    else  
    {  
        for($i=0; $i<$total; $i++)  
        {  
            echo '<p>'. $results[$i]->first_name .'</p>';  
        }  
    }  
    ?>  
    
    <?php 
    $total  = count($results);
    if($total   ==  0)
    {
        ?><p>Kayit Yok Ula Burda :-) </p><?php
    }
    else
    {
        for($i=0;$i<$total;$i++)
        {
            ?><p><?php echo $results[$i]->first_name; ?></p><?PHP 
        }
    }
    ?>
    
      
</body>  
</html>  