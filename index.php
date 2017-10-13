<?php 
require_once 'factory.php';

$parametros['diametro']=11;
$parametros['altura']=3;
$parametros['base']=5;
$circulo = FigurasFactory::crear('circulo',$parametros);
echo $circulo->getTipo()."<br>";
echo $circulo->getDiametro()."<br>";
echo $circulo->getSuperficie();



?>