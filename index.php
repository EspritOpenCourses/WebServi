<?php
class Calcul{
  function racine($n){
    if($n>=0)
    {
      return sqrt($n);
    }
     else 
    {
      return -1;
   }
   
}

$wsdl	= 'serv.wsdl';
$server	= new SoapServer($wsdl);
$server->setClass('Calcul');
$server->handle();
?>
