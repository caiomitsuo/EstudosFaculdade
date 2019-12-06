<?
//$dataatual = date("d/m/Y \a\s  H:i:s");
   // echo $dataatual; 

$nextdate =   date("d/m/Y" ,  strtotime("+10 days"));

echo "Sua encomenda ira chegar no dia:$nextdate";
?>